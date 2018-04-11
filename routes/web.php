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

Route::get('/admin', function () {
    //return view('welcome');
    return view('seatAdmin');
});
Route::get('/result', function () {
    //return view('welcome');
    return view('searchResult');
});
Route::get('/test', 'testController@test');
Route::get('/seatTest', 'seatAdminController@test');
Route::any('/seatSearch', 'seatAdminController@seatSearch');
Route::any('/seatCreateForm', 'seatAdminController@seatCreateForm');
Route::any('/seatCreating', 'seatAdminController@seatCreating');
Route::any('/scan', 'seatAdminController@scan');