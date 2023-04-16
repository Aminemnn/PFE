<?php

use App\Http\Controllers\addannonce;
use App\Http\Controllers\adddiplome;
use App\Http\Controllers\addexperience;
use App\Http\Controllers\addposte;
use App\Http\Controllers\addskills;
use App\Http\Controllers\changepassword;
use App\Http\Controllers\clientcontroller;
use App\Http\Controllers\ClientManagement;
use App\Http\Controllers\deleteannonce;
use App\Http\Controllers\deletePoste;
use App\Http\Controllers\freelancercontroller;
use App\Http\Controllers\FreelancerManagement;
use App\Http\Controllers\historiquepropostionfreelancer;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\store_favoris_client;
use App\Http\Controllers\store_favoris_freelancer;
use App\Http\Controllers\updateinfo;
use App\Mail\JOB4FREE;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
Route::get('/auth/facebook', 'FacebookController@redirectToFacebook');
Route::get('/auth/facebook/callback', 'FacebookController@handleFacebookCallback');
Route::post('freelancer/favoris',[store_favoris_freelancer::class,'store'])->name('freelancer_favoris');
Route::post('freelancer/favoris_detele',[store_favoris_freelancer::class,'delete'])->name('freelancer_favoris_delete');
Route::post('client/favoris',[store_favoris_client::class,'store'])->name('client_favoris');
Route::post('client/favoris_detele',[store_favoris_client::class,'delete'])->name('client_favoris_delete');
Route::post('/order', [OrderController::class,'store'])->name('order.store');
Route::get('freelancer/annonce/detail/{id}','detailcontroller@create')->middleware(['auth','verified','freelancer'])->name('detailannonce');
Route::get('freelancer/user/detail/{id}','userdetailcontroller@create')->middleware(['auth','verified','freelancer'])->name('userdetail');
Route::get('client/poste/detail/{id}','detailcontroller@createclient')->middleware(['auth','verified','client'])->name('detailposte');
Route::get('client/user/detail/{id}','userdetailcontroller@createclient')->middleware(['auth','verified','client'])->name('userdetailclient');
Route::get('freelancer/historiquepropostion','historiquepropostionfreelancer@create')->middleware(['auth','verified','freelancer'])->name('historiquepropostion');
Route::get('client/historiquepropostion','historiquepropostionfreelancer@createclient')->middleware(['auth','verified','client'])->name('historiquepropostionclient');
Route::post('propostion/refuser',[historiquepropostionfreelancer::class,'refuser'])->name('refuser');

Route::get('/get-notifications', function() {
    $user = Auth::user();
    $notifications = DB::table('notiffications')
        ->orderBy('id','desc')
        ->where('id_destinateur', $user->id)
        ->get();
      return $notifications;
});
Route::get('/nb-notification',function (){
   $user=Auth::user()->id;
   $notify= DB::table('notiffications')
       ->where('id_destinateur',$user)
       ->where('read','false')
       ->count();
   return $notify;
});

Route::get('client/historique','historiqueposte@historique')->middleware(['auth','verified','client'])->name('historiqueannonce');
Route::get('freelancer/setting','setting@create')->middleware(['auth','verified','freelancer'])->name('setting');
Route::get('client/setting','setting@createclient')->middleware(['auth','verified','client'])->name('settingclient');
Route::post('delete/poste',[deletePoste::class,'delete'])->name('delete');
Route::post('delete/annonce',[deleteannonce::class,'delete'])->name('deleteannonce');
Route::get('/', 'welcomecontroller@create')->name('welcome');
Route::get('/tester','testercontroller@create')->name('tester');
Route::get('admin/UserManagement','FreelancerManagement@create')->middleware(['auth','admin'])->name('freelancerManagement');
Route::post('admin/UserManagement',[FreelancerManagement::class,'destroy'])->name('freelancer_destroy');
Route::get('admin/ClientManagement','ClientManagement@create')->middleware(['auth','admin'])->name('ClientManagement');
Route::post('admin/ClientManagement',[ClientManagement::class,'drop'])->name('client_destroy');
Route::get('admin/dashboard','admincontroller@dashboard')->middleware(['auth','admin','disable_back'])->name('admin');
Route::get('client/dashboard','clientcontroller@dashboard')->middleware(['auth','verified','client','disable_back'])->name('client');
Route::get('freelancer/dashboard','freelancercontroller@dashboard')->middleware(['auth','verified','freelancer','disable_back'])->name('freelancer');
Route::post('freelancer/dashboard',[freelancercontroller::class,'store'])->name('freelancer');
Route::get('freelancer/historique','historiqueposte@create')->middleware(['auth','verified','freelancer'])->name('historiqueposte');
Route::post('client/addAd',[addannonce::class,'store'])->name('addann');
Route::post('freelancer/addPoste',[addposte::class,'store'])->name('addposte');
Route::get('freelancer/info','updateinfo@create')->middleware(['auth','verified','freelancer'])->name('info');
Route::get('client/info','updateinfo@info')->middleware(['auth','verified','client'])->name('infoclient');
Route::post('freelancer/info',[updateinfo::class,'updateinfo'])->name('updateinfo');
Route::get('freelancer/profil','freelancercontroller@profil')->middleware(['auth','verified','freelancer'])->name('profilfreelancer');
Route::post('freelancer/profil',[addskills::class,'store'])->name('addskill');
Route::get('freelancer/changepassword','changepassword@create')->middleware(['auth','verified','freelancer'])->name('changepasswordfreelancer');
Route::post('freelancer/profill',[adddiplome::class,'store'])->name('adddiplome');
Route::post('freelancer/profilll',[addexperience::class,'store'])->name('addexperience');
Route::post('skill/update',[addskills::class,'update'])->name('updateskill');
Route::get('client/changepassword','changepassword@createclient')->middleware(['auth','verified','client'])->name('changepasswordclient');
Route::get('client/profil','clientcontroller@profil')->middleware('auth','verified','client')->name('profil');
Route::get('client/addAd','clientcontroller@addPoste')->middleware('auth','verified','client')->name('addAd');
Route::get('freelancer/addPoste','freelancercontroller@addPoste')->middleware('auth','verified','freelancer')->name('addPoste');
Route::post('client/dashboard',[clientcontroller::class,'request'])->name('client');
Route::post('freelancer/changepassword',[changepassword::class,'store'])->name('changepassword');
Route::get('/dashboard','homecontroller@dashboard')->middleware(['auth','verified','freelancer','client'])->name('dashboard');


require __DIR__.'/auth.php';
