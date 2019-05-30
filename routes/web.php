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

Auth::routes();

Route::get('/', function () {
    return view('home');
})->name('index');


Route::get('/home', function() {
    return redirect('/dashboard');
});

Route::get('/elements','SiteFrontController@elements')->name('elements');


// Pages
Route::get('/home', 'SiteFrontController@index')->name('home');
Route::get('/about-us', 'SiteFrontController@aboutUs')->name('aboutUs');
Route::get('/services', 'SiteFrontController@services')->name('services');
Route::get('/website-development', 'SiteFrontController@websiteDevelopment')->name('websiteDevelopment');
Route::get('/e-commerce', 'SiteFrontController@eCommerce')->name('eCommerce');
Route::get('/digital-marketing','SiteFrontController@digitalMarketing')->name('digital_marketing');
Route::get('/portfolio','SiteFrontController@portfolio')->name('portfolio');
Route::get('/testimonals','SiteFrontController@testimonals')->name('testimonals');
Route::get('/contact-us','SiteFrontController@contact_us')->name('contact_us');
Route::get('/request-a-quote','SiteFrontController@request_a_quote')->name('request_a_quote');
Route::post('/thank-you-for-contact-us','MailController@sendMail')->name('sendMail');

Route::post('/thank-you','MailController@sendQuoteMail')->name('sendQuoteMail');



// Admin
Route::group(['middleware' => ['auth']], function () {
	//Dashboard
	Route::get('/dashboard','BackendController@dashboard')->name('dashboard');

	//ContactDetailsMessages
	Route::get('/contactUs/{id}','BackendController@contactUsView')->name('contactUsView');
	Route::get('/contactUsDetails','BackendController@contactUsDetails')->name('contactUsDetails');
	Route::get('/contactUsDelete/{id}','BackendController@contactUsDelete')->name('contactUsDelete');

	//ManageUsers
	Route::get('/manageUsers','BackendController@users')->name('manageUsers');
	Route::get('/viewUsers/{id}','BackendController@viewusers')->name('viewUsers');
	Route::get('/editUsers/{id}','BackendController@editusers')->name('editUsers');
	Route::get('/deleteUsers/{id}','BackendController@deleteusers')->name('deleteUsers');
	Route::get('/createUser','BackendController@createUser')->name('createUser');
	Route::post('/storeUser','BackendController@storeUser')->name('storeUser');
	Route::post('/updateUser/{id}','BackendController@updateUser')->name('updateUser');

	
});













