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

Route::get('/', 'WelcomeController@index');

Route::get('/Complaint', 'studentcontroller@index');

Route::get('/login', 'LoginController@index');

Route::post('/login', 'LoginController@login');

Route::get('/logout', function(){
    Auth::logout();
    return redirect('/login');
})->middleware('auth');