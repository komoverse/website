<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminModel;
use Session;
use Intervention\Image\ImageManagerStatic as Image;
use Analytics;
use Spatie\Analytics\Period;
use Illuminate\Support\Facades\Mail;


class AdminController extends Controller
{
    function get_client_ip() {
        $ipaddress = '';
        if (getenv('HTTP_CLIENT_IP'))
            $ipaddress = getenv('HTTP_CLIENT_IP');
        else if(getenv('HTTP_X_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
        else if(getenv('HTTP_X_FORWARDED'))
            $ipaddress = getenv('HTTP_X_FORWARDED');
        else if(getenv('HTTP_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_FORWARDED_FOR');
        else if(getenv('HTTP_FORWARDED'))
           $ipaddress = getenv('HTTP_FORWARDED');
        else if(getenv('REMOTE_ADDR'))
            $ipaddress = getenv('REMOTE_ADDR');
        else
            $ipaddress = 'UNKNOWN';
        return $ipaddress;
    }

    function showLoginPage(){
        return view('admin/login');
    }

    function showSystemLog() {
        $data = [
            'log' => AdminModel::getSystemLog(),
        ];
        return view('admin/system-log')->with($data);
    }

    function submitLogin(Request $req) {
        $userdata = AdminModel::getUserAdmin($req->username);
        if ($userdata) {
            if ($userdata->password == md5($req->password.$userdata->salt)) {
                Session::put('username', $userdata->username);
                Session::put('fullname', $userdata->fullname);
                Session::put('access_level', $userdata->access_level);
                AdminModel::addSystemLog('Logged in from '.$this->get_client_ip());
                return redirect('admin');
            } else {
                return redirect('admin/login')->with('error', 'Wrong password');
            }
        } else {
            return redirect('admin/login')->with('error', 'User not found');
        }
    }

    function logout(){
        Session::flush();
        return redirect('admin/login');
    }

    function showAdminDashboard(){
        $data = [
            'total_view' => json_decode(Analytics::fetchTotalVisitorsAndPageViews(Period::days(28))),
            'most_visit' => json_decode(Analytics::fetchMostVisitedPages(Period::days(28), 20)),
            'browser' => json_decode(Analytics::fetchTopBrowsers(Period::days(28), 10)),
            'referrer' => json_decode(Analytics::fetchTopReferrers(Period::days(28), 15)),
            'country' => Analytics::performQuery(Period::days(28), 'ga:sessions',
            [
                'dimensions' => 'ga:country',
                'sort' => '-ga:sessions',
            ]),
        ];
        return view('admin/index')->with($data);
    }

    function showNews() {
        $data = [
            'news_en' => AdminModel::getFiveNews('en'),
            'news_id' => AdminModel::getFiveNews('id'),
            'news_zh' => AdminModel::getFiveNews('zh'),
        ];
        return view('admin/news-list')->with($data);
    }

    function showNewsSingleLang(Request $req) {
        $data = [
            'lang' => $req->lang,
            'news' => AdminModel::getNews($req->lang),
        ];
        return view('admin/news-list-single-lang')->with($data);
    }

    function showAddNewsForm() {
        return view('admin/news-add');
    }

    function submitNews(Request $req) {
        $featured_image = $req->featured_image;

        if (AdminModel::submitNews($req, $featured_image)) {
            AdminModel::addSystemLog('Posted news : '.$req->title);
            return redirect('admin/news/list')->with('success', 'News published');
        } else {
            return redirect()->back()->with('error', 'Failed to publish news');
        }
    }

    function deleteNews(Request $req) {
        if (Session::get('access_level')) {
            $newsdata = AdminModel::getSingleNews($req->lang, $req->id);

            if (AdminModel::deleteNews($req->lang, $req->id)) {
                AdminModel::addSystemLog('Deleted news : '.$newsdata->title);
                return redirect('admin/news/list')->with('success', 'News deleted');
            }
        } else {
            return redirect('admin/login')->with('error', 'Access denied. Please login with appropriate access.');
        }
    }

    function pinNews(Request $req) {
        if (Session::get('access_level')) {
            if (AdminModel::pinNews($req->lang, $req->id)) {
                return redirect('admin/news/list');
            } else {
                return redirect('admin/news/list')->with('error', 'Failed to change pinned headline');
            }
        }
    }

    function unpinNews(Request $req) {
        if (Session::get('access_level')) {
            if (AdminModel::unpinNews($req->lang, )) {
                return redirect('admin/news/list');
            } else {
                return redirect('admin/news/list')->with('error', 'Failed to unpin headline');
            }
        }
    }
    function pinRightNews(Request $req) {
        if (Session::get('access_level')) {
            if (AdminModel::pinRightNews($req->lang, $req->id)) {
                return redirect('admin/news/list');
            } else {
                return redirect('admin/news/list')->with('error', 'Failed to change pinned headline');
            }
        }
    }

    function unpinRightNews(Request $req) {
        if (Session::get('access_level')) {
            if (AdminModel::unpinRightNews($req->lang, )) {
                return redirect('admin/news/list');
            } else {
                return redirect('admin/news/list')->with('error', 'Failed to unpin headline');
            }
        }
    }

    function showNewsletterRecipient() {
        $data = [
            'recipient' => AdminModel::getNewsletterRecipient(),
        ];
        return view('admin/newsletter-recipient')->with($data);
    }

    function showNewsletterCreationPage() {
        return view('admin/newsletter-create');
    }

    function addNewsletterQueue(Request $req) {
        if (Session::get('access_level')) {
            if (AdminModel::addNewsletterArchive($req)) {
                AdminModel::addSystemLog('Send newsletter subject: '.$req->subject);
                $recipient = AdminModel::getAllNewsletterRecipient();
                foreach ($recipient as $row) {
                    AdminModel::addNewsletterQueue($req, $row);
                }
                return redirect('admin/newsletter/archive')->with('success', 'Newsletter added to email delivery queue');
            } else {
                return redirect()->back()->with('error', 'Failed to send newsletter');
            }
        }
    }

    function showNewsletterArchive() {
        $data = [
            'newsletter' => AdminModel::getNewsletterArchive(),
        ];
        return view('admin/newsletter-archive')->with($data);
    }

    function sendNewsletter() {
        set_time_limit(600);
        $queue = AdminModel::getNewsletterQueue();
        foreach ($queue as $row) {
            $mail_data = [
                'content' => $row->message,
                'hash' => md5($row->recipient),
            ];
            \Mail::send('email.template', $mail_data, function ($message) use ($row) {
                $message->from('newsletter@komoverse.io', 'Komoverse Newsletter');
                $message->to($row->recipient);
                $message->subject($row->subject);
            });
            AdminModel::deleteNewsletterQueue($row->id);
        }
        return true;
    }

    function showChangePasswordForm() {
        return view('admin/change-password');
    }
 
    function submitChangePassword(Request $req) {
        $userdata = AdminModel::getUserAdmin(Session::get('username'));
        if ($req->new_password == $req->confirm_password) {
            if ($userdata->password == md5($req->current_password.$userdata->salt)) {
                if (AdminModel::changePassword($req, $userdata)) {
                    AdminModel::addSystemLog('Changed his/her password');
                    Session::flush();
                    return redirect('admin/login')->with('error', 'Password changed, please login again.');
                } else {
                    return redirect()->back()->with('error', 'Failed to change password. Please contact backend developer.');
                }
            } else {
                return redirect()->back()->with('error', 'Wrong current password');
            }
        } else {
            return redirect()->back()->with('error', 'New password did not match with confirm new password');
        }
    }

    function showUserManagementPage() {
        $data = [
            'users' => AdminModel::getUserList(),
        ];
        return view('admin/user-management')->with($data);
    }

    function showAddAdminPage() {
        return view('admin/user-add');
    }

    function submitUserAdmin(Request $req) {
        if (AdminModel::submitUserAdmin($req)) {
            AdminModel::addSystemLog('Added new administrator username: '.$req->username);
            return redirect('admin/user-management')->with('success', 'Add user success');
        } else {
            return redirect()->back()->with('error', 'Failed add user');
        }
    }

    function deleteUserAdmin(Request $req) {
        $userdata = AdminModel::getUserAdmin($req->username);
        if ($userdata->access_level == 'superuser') {
            return redirect('admin/user-management')->with('error', 'Superuser cannot be deleted');
        } else {
            if (Session::get('access_level') == 'editor') {
                return redirect('admin/user-management')->with('error', 'You need manager access level to delete user');
            } else {
                if (AdminModel::deleteUserAdmin($req->username)) {
                    AdminModel::addSystemLog('Deleted administrator username: '.$req->username);
                    return redirect('admin/user-management')->with('success', 'User deleted');
                } else {
                    return redirect('admin/user-management')->with('error', 'Failed to delete admin');
                }
            }
        }
    }


    function showPartners() {
        $data = [
            'partners_en' => AdminModel::getFivePartners('en'),
            'partners_id' => AdminModel::getFivePartners('id'),
            'partners_zh' => AdminModel::getFivePartners('zh'),
        ];
        return view('admin/partner-list')->with($data);
    }

    function showPartnersSingleLang(Request $req) {
        $data = [
            'lang' => $req->lang,
            'partner' => AdminModel::getPartners($req->lang),
        ];
        return view('admin/partner-list-single-lang')->with($data);
    }

    function showAddPartnerForm() {
        return view('admin/partner-add');
    }

    function submitPartner(Request $req) {
        $featured_image = $req->featured_image;

        if (AdminModel::submitPartner($req, $featured_image)) {
            AdminModel::addSystemLog('Posted partner : '.$req->title);
            return redirect('admin/partner/list')->with('success', 'News published');
        } else {
            return redirect()->back()->with('error', 'Failed to publish partner');
        }
    }

    function deletePartner(Request $req) {
        if (Session::get('access_level')) {
            $partnerdata = AdminModel::getSinglePartner($req->lang, $req->id);

            if (AdminModel::deletePartner($req->lang, $req->id)) {
                AdminModel::addSystemLog('Deleted partner : '.$partnerdata->title);
                return redirect('admin/partner/list')->with('success', 'News deleted');
            }
        } else {
            return redirect('admin/login')->with('error', 'Access denied. Please login with appropriate access.');
        }
    }

    function pinPartner(Request $req) {
        if (Session::get('access_level')) {
            if (AdminModel::pinPartner($req->lang, $req->id)) {
                return redirect('admin/partner/list');
            } else {
                return redirect('admin/partner/list')->with('error', 'Failed to change pinned partnership');
            }
        }
    }

    function unpinPartner(Request $req) {
        if (Session::get('access_level')) {
            if (AdminModel::unpinPartner($req->lang)) {
                return redirect('admin/partner/list');
            } else {
                return redirect('admin/partner/list')->with('error', 'Failed to unpin partnership');
            }
        }
    }

    function showMedia() {
        $data = [
            'files' => AdminModel::getMedia(),
        ];
        return view('admin/media')->with($data);
    }

    function saveMedia(Request $req) {
        if($req->hasFile('myfile')){
            // Do a loop over all images
            foreach ($req->file('myfile') as $file) {
                if ($file->isValid()) {
                    $path = base_path() . '/public/uploads';
                    $file_name = uniqid().'-'.str_replace(' ', '_', $file->getClientOriginalName());

                    // Create thumb for images
                    $images_ext  = ['jpg', 'jpeg', 'png', 'gif', 'ico', 'svg', 'bmp'];
                    if (in_array(strtolower($file->getClientOriginalExtension()), $images_ext)) {
                        // $img = Image::make($file->getRealPath());
                        // $img->resize(null, 100, function ($constraint) {
                        //     $constraint->aspectRatio();
                        // });
                        // $img->stream();
                        // $img->save($path.'/thumbs/'.$file_name);
                        // echo $path.'/'.$file_name;
                        $img = Image::make($file)
                                    ->encode('webp', 80)
                                    ->resize(1200, null, function ($constraint) {
                                        $constraint->aspectRatio();
                                        $constraint->upsize();
                                    })
                                    ->save($path.'/'.$file_name.'.webp');
                        $thumbs = Image::make($file)
                                    ->encode('webp', 60)
                                    ->resize(null, 100, function ($constraint) {
                                        $constraint->aspectRatio();
                                    })
                                    ->save($path.'/thumbs/'.$file_name.'.webp');
                        $file_name = $file_name.'.webp';
                    } else {
                        $file->move($path,$file_name);
                    }

                    AdminModel::addMediaDatabase($file_name);
                    AdminModel::addSystemLog('Upload file: '.$file_name);

                }
            }
            return redirect('admin/media')->with('success', 'Upload success');
            // end loop
        } else {
            return redirect()->back()->with('error', 'no files selected');
        }
    }


    function showAcademy() {
        $data = [
            'academy_en' => AdminModel::getFiveAcademy('en'),
            'academy_id' => AdminModel::getFiveAcademy('id'),
            'academy_zh' => AdminModel::getFiveAcademy('zh'),
        ];
        return view('admin/academy-list')->with($data);
    }

    function showAcademySingleLang(Request $req) {
        $data = [
            'lang' => $req->lang,
            'academy' => AdminModel::getAcademy($req->lang),
        ];
        return view('admin/academy-list-single-lang')->with($data);
    }

    function showAddAcademyForm() {
        return view('admin/academy-add');
    }

    function submitAcademy(Request $req) {
        $featured_image = $req->featured_image;

        if (AdminModel::submitAcademy($req, $featured_image)) {
            AdminModel::addSystemLog('Posted academy : '.$req->title);
            return redirect('admin/academy/list')->with('success', 'News published');
        } else {
            return redirect()->back()->with('error', 'Failed to publish academy');
        }
    }

    function deleteAcademy(Request $req) {
        if (Session::get('access_level')) {
            $academydata = AdminModel::getSingleAcademy($req->lang, $req->id);

            if (AdminModel::deleteAcademy($req->lang, $req->id)) {
                AdminModel::addSystemLog('Deleted academy : '.$academydata->title);
                return redirect('admin/academy/list')->with('success', 'News deleted');
            }
        } else {
            return redirect('admin/login')->with('error', 'Access denied. Please login with appropriate access.');
        }
    }

    function pinAcademy(Request $req) {
        if (Session::get('access_level')) {
            if (AdminModel::pinAcademy($req->lang, $req->id)) {
                return redirect('admin/academy/list');
            } else {
                return redirect('admin/academy/list')->with('error', 'Failed to change pinned academyship');
            }
        }
    }

    function unpinAcademy(Request $req) {
        if (Session::get('access_level')) {
            if (AdminModel::unpinAcademy($req->lang)) {
                return redirect('admin/academy/list');
            } else {
                return redirect('admin/academy/list')->with('error', 'Failed to unpin academyship');
            }
        }
    }

    function showEditAcademy(Request $req) {
        $data = [
            'academy' => AdminModel::getSingleAcademy($req->lang, $req->id),
            'language' => $req->lang,
        ];
        return view('admin/academy-edit')->with($data);
    }

    function updateAcademy(Request $req) {
        AdminModel::deleteAcademy($req->lang, $req->id);

        $featured_image = $req->featured_image;

        if (AdminModel::submitAcademy($req, $featured_image)) {
            AdminModel::addSystemLog('Update academy : '.$req->title);
            return redirect('admin/academy/list')->with('success', 'News published');
        } else {
            return redirect()->back()->with('error', 'Failed to publish academy');
        }
    }

    function showEditPartner(Request $req) {
        $data = [
            'partner' => AdminModel::getSinglePartner($req->lang, $req->id),
            'language' => $req->lang,
        ];
        return view('admin/partner-edit')->with($data);
    }

    function updatePartner(Request $req) {
        AdminModel::deletePartner($req->lang, $req->id);

        $featured_image = $req->featured_image;

        if (AdminModel::submitPartner($req, $featured_image)) {
            AdminModel::addSystemLog('Update partner : '.$req->title);
            return redirect('admin/partner/list')->with('success', 'News published');
        } else {
            return redirect()->back()->with('error', 'Failed to publish partner');
        }
    }

    function showEditNews(Request $req) {
        $data = [
            'news' => AdminModel::getSingleNews($req->lang, $req->id),
            'language' => $req->lang,
        ];
        return view('admin/news-edit')->with($data);
    }

    function updateNews(Request $req) {
        AdminModel::deleteNews($req->lang, $req->id);

        $featured_image = $req->featured_image;

        if (AdminModel::submitNews($req, $featured_image)) {
            AdminModel::addSystemLog('Update news : '.$req->title);
            return redirect('admin/news/list')->with('success', 'News published');
        } else {
            return redirect()->back()->with('error', 'Failed to publish news');
        }
    }
}
