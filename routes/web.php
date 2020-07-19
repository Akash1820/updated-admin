<?php

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'WelcomeController@ip');

Route::get('/Complaint', 'studentcontroller@index');

Route::get('/ip', 'studentcontroller@ip');
Route::post('/login', 'studentcontroller@index');
Route::get('/login', 'studentcontroller@index');

Route::post('/store', 'studentcontroller@store');

Route::get('/lreq','WelcomeController@Lreq');
Route::post('/lreq','WelcomeController@Lreq');

Route::post('/upload', 'studentcontroller@store');
Route::post('/status_update/{id}', 'studentcontroller@update_data');
Route::post('/emrgncy','WelcomeController@Emrgncy');
Route::get('/RegReq','WelcomeController@adminreg');
Route::post('/srakshan','WelcomeController@srakshan');
Route::post('/caware','WelcomeController@caware');
Route::post('/faq','WelcomeController@faq');
Route::get('/login_admin','WelcomeController@admin');
Route::get('/logout','WelcomeController@lout');
Route::post('/adminwelcome','WelcomeController@logadmin');
Route::get('/adminwelcome','WelcomeController@logadmin');


Route::get('/admin_reg','WelcomeController@registr');
Route::post('/AdminFreg','WelcomeController@logadmin');
Route::get('/AdminFreg','WelcomeController@logadmin');
Route::post('/linkapprove/{id}','WelcomeController@approve_link');
//Route::get('/linkapprove/{id}','WelcomeController@approve_link');
Route::post('/linkdenied/{id}','WelcomeController@reject_link');

Route::post('/admin','WelcomeController@First_reg');
Route::post('/admin_finalreg','WelcomeController@finalreg');
Route::view('/report', 'studentcontroller@reportupload');
Route::get('/welcome', 'studentcontroller@index');
Route::post('/approve/{ID}','WelcomeController@approve');
Route::post('/reject/{ID}','WelcomeController@reject');

//Route::get('/RegReq','WelcomeController@regreq');
Route::post('/Save','WelcomeController@save');


Route::get('pagenotfound', ['as' => 'notfound', 'uses' => 'WelcomeController@notfound']);
Route::post('/Complaint','studentController@insert');