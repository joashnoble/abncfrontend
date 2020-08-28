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
Route::get('/login', 'PagesController@login');
Route::get('/signup', 'PagesController@signup');
Route::get('/services', 'PagesController@services');
Route::get('/seminars', 'PagesController@seminars');
Route::get('/seminar/{id}', 'PagesController@seminar');

Route::get('/publications', 'PagesController@publications');
Route::get('/publication/{id}', 'PagesController@publication');

Route::get('/logindetails', 'LoginController@details');
Route::post('/validatelogin', 'LoginController@login');
Route::get('/logout', 'LoginController@logout');

Route::get('/profile', 'ProfileController@index');
Route::post('/client/create', 'ClientController@create');

Route::get('/checkout', 'ProfileController@quotation');
Route::get('/success', 'PagesController@success');


Route::get('/verify/{id}', 'ClientController@verify');



