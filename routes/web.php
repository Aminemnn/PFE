<?php

use App\Http\Controllers\addannonce;
use App\Http\Controllers\addposte;
use App\Http\Controllers\changepassword;
use App\Http\Controllers\clientcontroller;
use App\Http\Controllers\ClientManagement;
use App\Http\Controllers\freelancercontroller;
use App\Http\Controllers\FreelancerManagement;
use App\Http\Controllers\updateinfo;
use App\Mail\JOB4FREE;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admincontroller;
use App\Http\Controllers\homecontroller;



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

Route::get('/', 'welcomecontroller@create')->name('welcome');
Route::get('/tester','testercontroller@create')->name('tester');
Route::get('admin/UserManagement','FreelancerManagement@create')->middleware(['auth','admin'])->name('freelancerManagement');
Route::post('admin/UserManagement',[FreelancerManagement::class,'destroy'])->name('freelancer_destroy');
Route::get('admin/ClientManagement','ClientManagement@create')->middleware(['auth','admin'])->name('ClientManagement');
Route::post('admin/ClientManagement',[ClientManagement::class,'drop'])->name('client_destroy');
Route::get('admin/dashboard','admincontroller@dashboard')->middleware(['auth','admin'])->name('admin');
Route::get('client/dashboard','clientcontroller@dashboard')->middleware(['auth','verified','client'])->name('client');
Route::get('freelancer/dashboard','freelancercontroller@dashboard')->middleware(['auth','verified','freelancer'])->name('freelancer');
Route::post('freelancer/dashboard',[freelancercontroller::class,'store'])->name('freelancer');
Route::post('client/addAd',[addannonce::class,'store'])->name('addann');
Route::post('freelancer/addPoste',[addposte::class,'store'])->name('addposte');
Route::get('freelancer/info','updateinfo@create')->middleware('auth','verified','freelancer')->name('info');
Route::post('freelancer/info',[updateinfo::class,'updateinfo'])->name('updateinfo');
Route::get('freelancer/changepassword','changepassword@create')->middleware('auth','verified','freelancer')->name('changepassword');
Route::get('client/changepassword','changepassword@create')->middleware('auth','verified','client')->name('changepassword');
Route::get('client/profil','clientcontroller@profil')->middleware('auth','verified','client')->name('profil');
Route::get('client/addAd','clientcontroller@addPoste')->middleware('auth','verified','client')->name('addAd');
Route::get('freelancer/addPoste','freelancercontroller@addPoste')->middleware('auth','verified','freelancer')->name('addPoste');
Route::post('client/dashboard',[clientcontroller::class,'request'])->name('client');
Route::post('freelancer/changepassword',[changepassword::class,'store'])->name('changepassword');
Route::get('/dashboard','homecontroller@dashboard')->middleware(['auth','verified','freelancer','client'])->name('dashboard');
Route::get('logout', 'Auth\LoginController@logout')->middleware('disable-back-button');
Route::get('/send',function (){
    Mail::to('medmnedla@gmail.com')->send(new JOB4FREE());
    return response('sending');
});

require __DIR__.'/auth.php';
