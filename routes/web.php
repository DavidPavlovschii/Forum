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


/*
Route::get('/hello', function () {
    return '<h1>Hello World !</h1> ';
});


Route::get('/user/{id}/{name}', function($id, $name){
    return 'This is user id '.$id . " of name " . $name;
});
*/
Route::get('/', 'PagesController@index' );
Route::get('/about', 'PagesController@about' );
Route::get('/services', 'PagesController@services' );

Route::resource('posts','PostsController');


Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
