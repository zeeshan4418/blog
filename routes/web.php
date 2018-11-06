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



Route::get('/', 'PageController@getHome');
Route::get('/about', 'PageController@getAbout');
Route::get('/contact', 'PageController@getContact');
Route::get('/register', 'UserController@create');
Route::post('/getStates', 'UserController@getStates');
Route::post('/getCities', 'UserController@getCities');
Route::post('/register', 'UserController@create');
Route::post('/contact/submit','MessageController@submit');

Route::get('/home', 'HomeController@index')->name('home');

/*Route::get('/users/show', 'UserController@getUsers');
Route::get('/user/delete/{id}', 'UserController@deleteUser');
Route::get('/user/update/{id}', 'UserController@editUser');*/
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('user/{id}', 'UserController@destroy');
Route::get('user/profile/{id}', 'UserController@show');
Route::get('user/{id}/edit', 'UserController@edit');
Route::post('user/update/{id}','UserController@update');
Route::resource('user', 'UserController');