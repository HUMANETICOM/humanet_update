<?php

use App\Http\Controllers\frontend;
use App\Http\Controllers\HeaderFooterController;
use App\Http\Controllers\MedicalController;
use App\Http\Controllers\PersonaliaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginRegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::controller(LoginRegisterController::class)->group(function() {
    Route::get('/signup', 'signup')->name('signup');
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::post('/logout', 'logout')->name('logout');
});

Route::controller(frontend::class)->group(function() {
    Route::get('/humaehealth', 'humaehealth')->name('humaehealth');
    Route::get('/aboutus', 'aboutus')->name('aboutus');
    Route::get('/ourcoins', 'ourcoins')->name('ourcoins');
    Route::get('/pricing', 'pricing')->name('pricing');
});


Route::controller(HeaderFooterController::class)->group(function() {
    Route::get('/header', 'header')->name('header');
    Route::get('/footer', 'footer')->name('footer');

});

Route::controller(PersonaliaController::class)->group(function() { 
    Route::get('/personalia', 'personalia')->name('personalia');
    Route::get('/personalia/contact', 'contact')->name('contact');
    Route::get('/personalia/id', 'id')->name('id');
    Route::get('/personalia/insurance', 'insurance')->name('insurance');
    Route::get('/personalia/bmc', 'bmc')->name('bmc');
    Route::get('/personalia/start-medica-info', 'smi')->name('smi');
    Route::post('/personaliastorage', 'personaliastorage')->name('personaliastorage');
});

Route::controller(MedicalController::class)->group(function(){
    Route::get('/medical','medical')->name('medical');
});

Route::post('/personalia', [PersonaliaController::class, 'submitForm'])->name('form.submit');
Route::post('/personalia/id', [PersonaliaController::class, 'submitFormContact'])->name('form.submit.contact');


