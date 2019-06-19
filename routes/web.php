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
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');


Route::resource('posts','PostsController');
//Auth::routes();
Auth::routes(['verify' => true]);
/*Route::get('profile', function () {
	return 'This is profile';
})->middleware('verified');*/

Route::get('/dashboard', 'DashboardController@index');
