<?php


Route::get('/', 'PageController@getHome');
Route::get('/about', 'PageController@getAbout');
Route::get('/contact', 'PageController@getContact');
Route::post('/getStates', 'UserController@getStates');
Route::post('/getCities', 'UserController@getCities');
Route::post('/contact/submit','MessageController@submit');
Route::get('/messages','MessageController@index');
//Route::get('/home', 'HomeController@index')->name('home');
Route::get('user/{id}', 'UserController@destroy');
Route::get('user/profile/{id}', 'UserController@show');
Route::get('user/{id}/edit', 'UserController@edit');
Route::post('user/update/{id}','UserController@update');


/*Route::get('user/create', 'UserController@create');*/
//Route::get('/register', 'UserController@create');
//Route::post('/register', 'UserController@create');
//Route::get('/login', 'AuthController@index');

/*Route::get('/signup', 'SignUpController@index');
Route::post('/signup','SignUpController@create');*/

/*Route::get('/users/show', 'UserController@getUsers');
Route::get('/user/delete/{id}', 'UserController@deleteUser');
Route::get('/user/update/{id}', 'UserController@editUser');*/

Route::get('/welcome', function () {
    return view('welcome');
});

Route::resource('user', 'UserController');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
