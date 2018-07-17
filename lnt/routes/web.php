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

Auth::routes();

Route::get('/' , 'PagesController@index');
Route::get('/about' , 'PagesController@about');
Route::get('/blog' , 'PagesController@blog');
// Route::get('/events' , 'PagesController@events');
// Route::get('/causes' , 'PagesController@causes');
Route::get('/donate' , 'PagesController@donate');
Route::get('/singleblog/{id}' , 'PagesController@singleblog');

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('posts', 'PostController');
Route::resource('events', 'EventsController');
Route::resource('causes', 'CausesController');
Route::resource('photos', 'PhotosController');
Route::resource('gallery', 'GalleryController');


