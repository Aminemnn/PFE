<?php

use App\Http\Controllers\changepassword;
use App\Http\Controllers\freelancercontroller;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('admin/dashboard','admincontroller@dashboard')->middleware(['auth','verified','admin'])->name('admin');
Route::get('client/dashboard','clientcontroller@dashboard')->middleware(['auth','verified','client'])->name('client');
Route::get('freelancer/dashboard','freelancercontroller@dashboard')->middleware(['auth','verified','freelancer'])->name('freelancer');
Route::post('freelancer/dashboard',[freelancercontroller::class,'store'])->name('freelancer');
Route::get('freelancer/changepassword','changepassword@create')->middleware('auth','verified','freelancer')->name('changepassword');
Route::get('client/changepassword','changepassword@create')->middleware('auth','verified','client')->name('changepassword');
Route::get('client/profil','clientcontroller@profil')->middleware('auth','verified','client')->name('profil');
Route::post('freelancer/changepassword',[changepassword::class,'store'])->name('changepassword');
Route::get('/dashboard','homecontroller@dashboard')->middleware(['auth','verified','freelancer','client'])->name('dashboard');
Route::get('logout', 'Auth\LoginController@logout')->middleware('disable-back-button');
Route::get('/send',function (){
    Mail::to('medmnedla@gmail.com')->send(new JOB4FREE());
    return response('sending');
});

require __DIR__.'/auth.php';
