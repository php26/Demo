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

// Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
//     Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
//     Route::post('login', 'Auth\LoginController@login');
//     Route::get('logout', 'Auth\LoginController@logout')->name('logout');
// });

// Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'adminLogin'], function () {
//     Route::get('/dashboard', 'HomeController@index')->name('dashboard');
// });


//List cat
Route::get('/cats',
[
	'as' => 'cats.index',
	'uses' => 'CatController@index'
]);

//create cat
Route::get('/cats/create', 
[
	'as' => 'cats.create',
	'uses' => 'CatController@create'
]);

// detail cat
Route::get('/cats/{id}',
[
	'as' => 'cats.show',
	'uses' => 'CatController@show'
]);


// store cat
Route::post('/cats',
[
	'as' => 'cats.store',
	'uses' => 'CatController@store'
]);

// delete cat
Route::delete('/cats/{id}',
[
	'as' => 'cats.destroy',
	'uses' => 'CatController@destroy'
]);

//show form edit cat
Route::get('/cats/{id}/edit',
[
	'as' => 'cats.edit',
	'uses' => 'CatController@edit'
]);

//save update cat
Route::put('/cats/{id}',
[
	'as' => 'cats.update',
	'uses' => 'CatController@update'
]);

// Route::resource('cats', 'CatController');


Auth::routes();

Route::resource('breeds', 'BreedController');

//list breed
Route::get('/breeds' ,
	[
		'as' => 'breeds.index',
		'uses' => 'BreedController@index'
]);

//list cat of one breed 
Route::get('/breeds/{id}/cats',
	[
		'as' => 'show.list.cat.by.breed',
		'uses' => 'BreedController@showListCatsByBreedId'
]);


Route::get('/home', 'HomeController@index')->name('home');
