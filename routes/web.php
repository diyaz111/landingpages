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
Route::get('/pesan', function () {
    return view('/pesan');
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

Route::get('/feature', function(){
    return view ('Landing.layout.feature');
});


Route::get('wizard', function () {
    return view('livewire.register');
})->middleware('auth');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('provinces',[App\Http\ControllersLivewire\Wizard::class, 'provinces'])->name('provinces');
Route::get('cities', [App\Http\ControllersLivewire\Wizard::class, 'cities'])->name('cities');
Route::get('districts', [App\Http\ControllersLivewire\Wizard::class, 'districts'])->name('districts');
Route::get('villages', [App\Http\ControllersLivewire\Wizard::class, 'villages'])->name('villages');
