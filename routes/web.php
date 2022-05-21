<?php

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

if(version_compare(PHP_VERSION, '7.2.0', '>=')) {
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
}

//Default Controller
Route::get('/', 'HomeController@index')->name('index');
Route::post('/home/submit', 'HomeController@submit');
Route::get('/home/skin/{any?}', 'HomeController@getSkin');


Route::get('dashboard/import', 'DashboardController@getImport');
/* Auth & Profile */
Route::get('user/profile','UserController@getProfile');
Route::get('user/theme','UserController@getTheme');
Route::get('user/login','UserController@getLogin');
Route::get('user/register','UserController@getRegister');
Route::get('user/logout','UserController@getLogout');
Route::get('user/reminder','UserController@getReminder');
Route::get('user/reset/{any?}','UserController@getReset');
Route::get('user/reminder','UserController@getReminder');
Route::get('user/activation','UserController@getActivation');
// Social Login
Route::get('user/socialize/{any?}','UserController@socialize');
Route::get('user/autosocialize/{any?}','UserController@autosocialize');
//
Route::post('user/signin','UserController@postSignin');
Route::post('user/login','UserController@postSigninMobile');
Route::post('user/signup','UserController@postSignupMobile');
Route::post('user/create','UserController@postCreate');
Route::post('user/saveprofile','UserController@postSaveprofile');
Route::post('user/savepassword','UserController@postSavepassword');
Route::post('user/doreset/{any?}','UserController@postDoreset');
Route::post('user/request','UserController@postRequest');
/* Posts & Blogs */
Route::get('posts','HomeController@posts');
Route::get('posts/category/{any}','HomeController@posts');
Route::get('posts/read/{any}','HomeController@read');
Route::post('posts/comment','HomeController@comment');
Route::get('posts/remove/{id?}/{id2?}/{id3?}','HomeController@remove');
// Start Routes for Notification 
Route::resource('notification','NotificationController');
Route::get('home/load','HomeController@getLoad');
Route::get('home/lang/{any}','HomeController@getLang');

Route::get('/set_theme/{any}', 'HomeController@set_theme');

include('pages.php');

Route::resource('sximoapi','SximoapiController');
Route::resource('services/posts', 'Services\PostController');


// Routes for  all generated Module
include('module.php');
// End custom routes
Route::group(['middleware' => 'auth'], function () {
	Route::resource('dashboard','DashboardController');

});


Route::group(['namespace' => 'Sximo','middleware' => 'auth'], function () {
	// This is root for superadmin
		
		include('sximo.php');
		
});

Route::group(['namespace' => 'Core','middleware' => 'auth'], function () {
	include('core.php');
});

//VMSL Route
Route::get('getmedicine/{id}','CitController@getMedicineById');


Route::post('sendmail','VmslController@contact_email')->name('contact.email');

// DITECH
	Route::get('section/post/all','VmslController@company_post')->name('company.section.post');
	Route::get('section/post/details/{id}','VmslController@company_post_details')->name('company.section.post.details');


	Route::get('solution','VmslController@services')->name('company.services');
	Route::get('solution/{id}','VmslController@services_single')->name('company.services.single');


	Route::get('news', 'VmslController@news')->name('news');
	Route::get('news/details/{id}', 'VmslController@newsDetails')->name('news.details');


	Route::get('clients','VmslController@clients')->name('clients');

	Route::get('portfolio','VmslController@portfolio')->name('portfolio');
	Route::get('portfolio/details/{id}','VmslController@portfolioDetails')->name('portfolio.details');

	Route::get('management/profile','VmslController@managementProfile')->name('management.profile');

	Route::get('newsroom','VmslController@news')->name('newsroom');
	
	Route::get('blogs','VmslController@blogs')->name('blogs');

	Route::get('industry','VmslController@industry')->name('industry');
	Route::get('industry/{id}','VmslController@industryDetails')->name('industry.details');

	Route::get('service','VmslController@products')->name('products');
	Route::get('consultancy','VmslController@consultancy')->name('consultancy');
	Route::get('training','VmslController@training')->name('training');
	
	Route::get('service/single/{id}','VmslController@productsSingle')->name('products.single');

	Route::get('under-attack-hotline','VmslController@underattackhotline')->name('under.attack.hotline');
	Route::post('under-attack-hotline/store','VmslController@underattackhotlineStore')->name('under.attack.hotline.store');
	Route::post('contact/store','VmslController@contactStore')->name('contact.store');
	
	Route::post('search','VmslController@search')->name('search');


//Talent sourching
Route::get('about','VmslController@about')->name('about');
Route::get('user-profile','VmslController@userProfile')->name('user.profile');
Route::get('why/us','VmslController@whyUs')->name('whyUs');
Route::get('faqs','VmslController@faqs')->name('faqs');

Route::get('value-details/{id}','VmslController@valueDetails')->name('value.details');

Route::get('timeline','VmslController@timeline')->name('timeline');
Route::get('professional-affiliation','VmslController@professionalaffiliation')->name('professional.affiliation');
Route::get('research','VmslController@research')->name('research');
Route::get('publications','VmslController@publications')->name('publications');

Route::get('our-activities','VmslController@whatwedo')->name('what-we-do');
Route::get('team','VmslController@team')->name('team');
Route::get('donation','VmslController@donation')->name('donation');
Route::get('photos','VmslController@gallary')->name('full.gallery');
Route::get('video-gallery','VmslController@Vediogallary')->name('video.gallery');

Route::post('user-details', 'VmslController@user_details');

Route::get('videos','VmslController@video')->name('video');
Route::get('contact','VmslController@contact_page')->name('contact.page');
Route::post('contactform','VmslController@contact_data')->name('contact.data');
Route::post('photo-filter','VmslController@photo_filter');
Route::get('forum-for-health','VmslController@forum_for_health');
Route::post('forum-for-health-modal','VmslController@forum_for_health_modal');
Route::get('research&publication','VmslController@publication')->name('publication');
Route::get('achivement','VmslController@achivement')->name('achivement');
Route::post('achivement-details', 'VmslController@achivement_details');
Route::get('governing-board','VmslController@governing_board')->name('governing-board');
Route::get('project-team','VmslController@project_team')->name('project-team');

Route::get('roles','VmslController@roles')->name('roles');
Route::get('jobs/{id}/{name}','VmslController@jobs')->name('jobs');
Route::get('job/details/{id}','VmslController@jobsDetails')->name('jobs.details');
Route::get('job/apply/{id}','VmslController@jobApply')->name('jobs.apply');

Route::get('career','VmslController@career')->name('career');
Route::get('career/details/{id}','VmslController@CareerDetails')->name('career.details');
Route::get('career/circular/{id}','VmslController@circular')->name('circular');
Route::post('savecareer','VmslController@savecareer');

Route::get('e-bulletin','VmslController@ebulletin')->name('ebulletin');


