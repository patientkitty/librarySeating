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
    //return view('welcome');
    return view('login');
});

Route::get('/seatAdmin', function () {
    //return view('welcome');
    return view('seatAdmin');
});
Route::get('/result', function () {
    //return view('welcome');
    return view('searchResult');
});
Route::get('/test', 'testController@test');
Route::get('/seatTest', 'seatAdminController@test');
Route::post('/seatSearch', 'seatAdminController@post_seatSearch');
Route::get('/seatSearch', 'seatAdminController@get_seatSearch');
Route::any('/testSearch', 'seatAdminController@testSearch');
Route::any('/seatCreateForm', 'seatAdminController@seatCreateForm');
Route::any('/seatCreating', 'seatAdminController@seatCreating');
Route::any('/scan', 'seatAdminController@scan');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/app', function(){
    return view('seat');
});
Route::get('/search/{seatCode}', 'seatAdminController@search');
