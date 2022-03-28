<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndonesianController;
use App\Http\Controllers\ChineseController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\APIController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Route::prefix('admin')->group(function(){
    Route::get('/', [AdminController::class, 'showAdminDashboard']);
    Route::get('login', [AdminController::class, 'showLoginPage']);
    Route::post('login', [AdminController::class, 'submitLogin']);
    Route::get('logout', [AdminController::class, 'logout']);
    Route::get('system-log', [AdminController::class, 'showSystemLog']);
    Route::get('change-password', [AdminController::class, 'showChangePasswordForm']);
    Route::post('change-password', [AdminController::class, 'submitChangePassword']);

    Route::get('news/list', [AdminController::class, 'showNews']);
    Route::get('news/list/{lang}', [AdminController::class, 'showNewsSingleLang']);
    Route::get('news/create', [AdminController::class, 'showAddNewsForm']);
    Route::post('news/create', [AdminController::class, 'submitNews']);
    Route::get('news/delete/{lang}/{id}', [AdminController::class, 'deleteNews']);
    Route::get('news/pin/{lang}/{id}', [AdminController::class, 'pinNews']);
    Route::get('news/unpin/{lang}/{id}', [AdminController::class, 'unpinNews']);
    Route::get('news/right-pin/{lang}/{id}', [AdminController::class, 'pinRightNews']);
    Route::get('news/right-unpin/{lang}/{id}', [AdminController::class, 'unpinRightNews']);
    Route::get('news/edit/{lang}/{id}', [AdminController::class, 'showEditNews']);
    Route::post('news/edit/{lang}/{id}', [AdminController::class, 'updateNews']);

    Route::get('newsletter/recipient', [AdminController::class, 'showNewsletterRecipient']);

    Route::get('user-management', [AdminController::class, 'showUserManagementPage']);
    Route::get('user-management/add', [AdminController::class, 'showAddAdminPage']);
    Route::post('user-management/add', [AdminController::class, 'submitUserAdmin']);
    Route::get('user-management/delete/{username}', [AdminController::class, 'deleteUserAdmin']);

    Route::get('partner/list', [AdminController::class, 'showPartners']);
    Route::get('partner/list/{lang}', [AdminController::class, 'showPartnersSingleLang']);
    Route::get('partner/create', [AdminController::class, 'showAddPartnerForm']);
    Route::post('partner/create', [AdminController::class, 'submitPartner']);
    Route::get('partner/delete/{lang}/{id}', [AdminController::class, 'deletePartner']);
    Route::get('partner/pin/{lang}/{id}', [AdminController::class, 'pinPartner']);
    Route::get('partner/unpin/{lang}/{id}', [AdminController::class, 'unpinPartner']);
    Route::get('partner/edit/{lang}/{id}', [AdminController::class, 'showEditPartner']);
    Route::post('partner/edit/{lang}/{id}', [AdminController::class, 'updatePartner']);

    Route::get('academy/list', [AdminController::class, 'showAcademy']);
    Route::get('academy/list/{lang}', [AdminController::class, 'showAcademySingleLang']);
    Route::get('academy/create', [AdminController::class, 'showAddAcademyForm']);
    Route::post('academy/create', [AdminController::class, 'submitAcademy']);
    Route::get('academy/delete/{lang}/{id}', [AdminController::class, 'deleteAcademy']);
    Route::get('academy/pin/{lang}/{id}', [AdminController::class, 'pinAcademy']);
    Route::get('academy/unpin/{lang}/{id}', [AdminController::class, 'unpinAcademy']);
    Route::get('academy/edit/{lang}/{id}', [AdminController::class, 'showEditAcademy']);
    Route::post('academy/edit/{lang}/{id}', [AdminController::class, 'updateAcademy']);

    Route::get('media', [AdminController::class, 'showMedia']);
    Route::post('media/upload', [AdminController::class, 'saveMedia']);
});

Route::prefix('api')->group(function(){
    Route::get('check_username/{username}', [APIController::class, 'checkUsername']);
    Route::get('sitemap', [APIController::class, 'retrieveSitemap']);
});

Route::get('gdrive', function(){
    return redirect('https://drive.google.com/drive/folders/1f9cYdO92t3VuI7Osly2Sa6HE6USkQpVe?usp=sharing');
});



Route::get('/', [HomeController::class, 'showHome']);
Route::get('whitepaper', [HomeController::class, 'showPapers']);
Route::get('papers', [HomeController::class, 'showPapers']);
Route::get('team', [HomeController::class, 'showTeams']);
Route::get('contact-us', [HomeController::class, 'showContact']);
Route::get('privacy-policy', [HomeController::class, 'showPrivacyPolicy']);
Route::get('terms-of-use', [HomeController::class, 'showTermsOfUse']);
Route::post('subs-newsletter', [HomeController::class, 'saveSubscriber']);
Route::get('subs-success', [HomeController::class, 'showSubSuccess']);
Route::get('subs-failed', [HomeController::class, 'showSubFailed']);
Route::get('news', [HomeController::class, 'showNews']);
Route::get('news/{slug}', [HomeController::class, 'showSingleNews']);
Route::get('partners', [HomeController::class, 'showPartners']);
Route::get('partner/{slug}', [HomeController::class, 'showSinglePartner']);
Route::get('academy', [HomeController::class, 'showAcademy']);
Route::get('academy/{slug}', [HomeController::class, 'showSingleAcademy']);
Route::get('news/preview/{lang}/{slug}', [HomeController::class, 'showPreviewNews']);
Route::get('partner/preview/{lang}/{slug}', [HomeController::class, 'showPreviewPartner']);
Route::get('academy/preview/{lang}/{slug}', [HomeController::class, 'showPreviewAcademy']);
Route::get('careers', [HomeController::class, 'showCareers']);
Route::get('careers/{job}', [HomeController::class, 'showCareersVacancy']);

Route::get('{lang}', [HomeController::class, 'showHome']);
Route::get('{lang}/papers', [HomeController::class, 'showPapers']);
Route::get('{lang}/team', [HomeController::class, 'showTeams']);
Route::get('{lang}/contact-us', [HomeController::class, 'showContact']);
Route::get('{lang}/privacy-policy', [HomeController::class, 'showPrivacyPolicy']);
Route::get('{lang}/terms-of-use', [HomeController::class, 'showTermsOfUse']);
Route::get('{lang}/news', [HomeController::class, 'showNews']);
Route::get('{lang}/news/{slug}', [HomeController::class, 'showSingleNews']);
Route::get('{lang}/partners', [HomeController::class, 'showPartners']);
Route::get('{lang}/partner/{slug}', [HomeController::class, 'showSinglePartner']);
Route::get('{lang}/academy', [HomeController::class, 'showAcademy']);
Route::get('{lang}/academy/{slug}', [HomeController::class, 'showSingleAcademy']);
Route::get('{lang}/careers', [HomeController::class, 'showCareers']);
Route::get('{lang}/careers/{job}', [HomeController::class, 'showCareersVacancy']);

Route::get('test-js', function(){
    return view('test');
});