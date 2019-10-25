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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/index', 'IndexController@index')->name('index');
Route::get('/franchise', 'IndexController@showFranchise')->name('franchise');
Route::get('/reservations', 'IndexController@showReservations')->name('reservations');
Route::get('/contact-us', 'IndexController@showContact')->name('contact');
Route::get('/menu-han-thuyen', 'IndexController@showMenu')->name('menu-han-thuyen');
Route::get('/menu-saigon-centre', 'IndexController@showMenuSG')->name('menu-saigon-centre');

Route::post('/savefranchise', 'IndexController@infoFranchise')->name('savefranchise');
Route::post('/savereservations', 'IndexController@infoReservations')->name('savereservations');
