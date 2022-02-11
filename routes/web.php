<?php
use App\Http\Controllers\NotificationSweetAlert;
use App\Http\Controllers\ContactController;
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
Route::get('kirim-email','App\Http\Controllers\MailController@index');

Route::controller(ContactController::class)->group(function () {
    Route::post('/contact', 'App\Http\Controllers\ContactController@sendMail');
});

Route::get('/', function () {
    return view('Landing.layout.index');
});
Route::get('/profile', function(){
    return view ('Landing.layout.profile');
});

Route::get('/service', function(){
    return view ('Landing.layout.service');
});

Route::get('/contact', function(){
    return view ('Landing.layout.contact');
});

Route::get('wizard', function () {
    return view('livewire.register');
});

