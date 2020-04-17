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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', 'PagesController@index');
Route::get('/contactus', 'PagesController@contactus');
Route::get('/seminars', 'PagesController@seminars');
Route::get('/seminar/{id}', 'PagesController@seminar');

Route::get('/publications', 'PagesController@publications');
Route::get('/publication/{id}', 'PagesController@publication');
