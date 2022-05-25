<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use App\Models\HomeModel;

class HomeController extends Controller
{
    public $lang;

    function __construct(Request $req) {
        if ($req->lang) {
            $this->lang = $req->lang;
        } else { 
            $this->lang = 'en';
        }
    }

    function saveSubscriber(Request $req) {
        if (HomeModel::saveSubscriber($req)) {
            return redirect('subs-success');
        } else {
            return redirect('subs-failed');
        }
    }

    function unsubscribeNewsletter(Request $req) {
        if (HomeModel::unsubNewsletter($req->hash)) {
            return redirect('unsubs-success');
        } else {
            return redirect('unsubs-failed');
        }
    }

    function showNews() {
        $data = [
            'lang' => $this->lang,
            'newscontent' => HomeModel::getNews($this->lang),
        ];
        return view('news-list')->with($data);
    }

    function showSingleNews(Request $req) {
        $data = [
            'lang' => $this->lang,
            'newscontent' => HomeModel::getSingleNews($this->lang, $req->slug),
        ];
        return view('news-single')->with($data);
    }

    function showPartners() {
        $data = [
            'lang' => $this->lang,
            'partnercontent' => HomeModel::getPartners($this->lang),
        ];
        return view('partner-list')->with($data);
    }

    function showSinglePartner(Request $req) {
        $data = [
            'lang' => $this->lang,
            'partnercontent' => HomeModel::getSinglePartner($this->lang, $req->slug),
        ];
        return view('partner-single')->with($data);
    }

    function showHome() {
        $data = [
            'lang' => $this->lang,
        ];
        return view('home')->with($data);
    }

    function showTeams() {
        $data = [
            'lang' => $this->lang,
        ];
        return view('team')->with($data);
    }

    function showPapers() {
        $data = [
            'lang' => $this->lang,
        ];
        return view('whitepaper')->with($data);
    }

    function showContact() {
        $data = [
            'lang' => $this->lang,
        ];
        return view('contact-us')->with($data);
    }

    function showPrivacyPolicy() {
        $data = [
            'lang' => $this->lang,
        ];
        return view('privacy-policy')->with($data);
    }

    function showTermsOfUse() {
        $data = [
            'lang' => $this->lang,
        ];
        return view('terms-of-use')->with($data);
    }

    function showSubSuccess() {
        $data = [
            'lang' => $this->lang,
        ];
        return view('subs-success')->with($data);
    }

    function showSubFailed() {
        $data = [
            'lang' => $this->lang,
        ];
        return view('sub-failed')->with($data);
    }

    function showAcademy() {
        $data = [
            'lang' => $this->lang,
            'academycontent' => HomeModel::getAcademy($this->lang),
        ];
        return view('academy-list')->with($data);
    }

    function showSingleAcademy(Request $req) {
        $data = [
            'lang' => $this->lang,
            'academycontent' => HomeModel::getSingleAcademy($this->lang, $req->slug),
        ];
        return view('academy-single')->with($data);
    }

    function showPreviewNews(Request $req) {
        $data = [
            'lang' => $req->lang,
            'newscontent' => HomeModel::getNewsPreview($req->lang, $req->slug),
        ];
        return view('news-single')->with($data);
    }

    function showPreviewPartner(Request $req) {
        $data = [
            'lang' => $req->lang,
            'partnercontent' => HomeModel::getPartnerPreview($req->lang, $req->slug),
        ];
        return view('partner-single')->with($data);
    }

    function showPreviewAcademy(Request $req) {
        $data = [
            'lang' => $req->lang,
            'academycontent' => HomeModel::getAcademyPreview($req->lang, $req->slug),
        ];
        return view('academy-single')->with($data);
    }

    function showCareers(Request $req) {
        $data = [
            'lang' => $this->lang,
        ];
        return view('careers')->with($data);
    }

    function showCareersVacancy(Request $req) {
        $data = [
            'lang' => $this->lang,
        ];
        return view('career-template/'.$req->job)->with($data);
    }

    function getLastPatchImage() {
        $patch_data = HomeModel::getLatestPatchNotes();
        $localhost = array(
            '127.0.0.1',
            '::1'
        );

        if(!in_array($_SERVER['REMOTE_ADDR'], $localhost)){
            $image_path = $patch_data->thumb_image;
        } else {
            $image_path = str_replace('https', 'http', $patch_data->thumb_image);
        }
        $img = Image::make($image_path)
                        ->rectangle(3, 5, 80, 17, function ($draw) {
                            $draw->background('rgba(255,255,255,0.4)');
                        })
                        ->text('Game Updates', 5, 15, function($font) {
                            $font->file(public_path('../assets/fonts/Roboto-Medium.ttf'));
                            $font->size(10);
                            $font->color('#ffffff');
                        })
                        ->text($patch_data->title, 5, 70, function($font) {
                            $font->file(public_path('../assets/fonts/Roboto-Medium.ttf'));
                            $font->size(12);
                            $font->color('#ffffff');
                        });

        return $img->response('jpg');
    }
    function getLastAnnouncementImage() {
        $patch_data = HomeModel::getLatestGameAnnouncement();
        $localhost = array(
            '127.0.0.1',
            '::1'
        );

        if(!in_array($_SERVER['REMOTE_ADDR'], $localhost)){
            $image_path = $patch_data->thumb_image;
        } else {
            $image_path = str_replace('https', 'http', $patch_data->thumb_image);
        }


        $img = Image::make($image_path)
                        ->rectangle(3, 5, 80, 17, function ($draw) {
                            $draw->background('rgba(255,255,255,0.4)');
                        })
                        ->text('Announcement', 5, 15, function($font) {
                            $font->file(public_path('../assets/fonts/Roboto-Medium.ttf'));
                            $font->size(10);
                            $font->color('#ffffff');
                        });

        $lines = explode("\n", wordwrap($patch_data->title, 30));
        for ($i = 0; $i < count($lines); $i++) {
            $offset = 70 - ($i * 15);
            $img->text($lines[(count($lines)-1)-$i], 5, $offset, function($font) {
                $font->file(public_path('../assets/fonts/Roboto-Medium.ttf'));
                $font->size(12);
                $font->color('#ffffff');
            });
        }

        return $img->response('jpg');
    }
    function getLatestPatchNotes() {
        $data = [
            'lang' => $this->lang,
            'patch_notes' => HomeModel::getLatestPatchNotes(),
        ];
        return view('patch-notes-single')->with($data);
    }
    function getLatestGameAnnouncement() {
        $data = [
            'lang' => $this->lang,
            'patch_notes' => HomeModel::getLatestGameAnnouncement(),
        ];
        return view('patch-notes-single')->with($data);
    }
}
