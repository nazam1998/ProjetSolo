<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/','WelcomeController@index');


Auth::routes(['register'=>false]);

Route::get('/admin', 'WelcomeController@admin')->name('admin');
Route::get('admin/header', 'HeaderController@index')->name('header.index');
Route::get('admin/header-edit/{id}', 'HeaderController@edit')->name('header.edit');
Route::post('admin/header-update/{id}', 'HeaderController@update')->name('header.update');

Route::resource('admin/testimonial', 'TestimonialController');
Route::resource('admin/work', 'WorkController');
Route::resource('admin/contact', 'ContactController');
Route::resource('admin/avantage', 'AvantageController');

Route::resource('admin/mail', 'RegistermailController');

Route::get('admin/newsletter','NewsletterController@index')->name('newsletter.index');
Route::post('admin/newsletter/subscribe','NewsletterController@subscribe')->name('newsletter.subscribe');

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('admin');
