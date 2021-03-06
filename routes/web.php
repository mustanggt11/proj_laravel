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
Route::get('/', function () {
    return view('welcome');

});

Route::get('/about', function () {
    return 'hi this is about page';

});

Route::get('/contact', function () {
    return 'hi this is contact page';

});

Route::get('/post/{id}/{name}', function ($id, $name){

    return 'this is the post number '. $id . ' ' . $name;

});

Route::get('admin/posts/example', array('as' => 'admin.home' ,function(){

    $url = route('admin.home');

    return 'this url is ' . $url;
}));
*/

//Route::get('/post/{id}', 'PostsController@index');

Route::resource('posts', 'PostsController');

Route::get('/contact', 'PostsController@contact');

Route::get('post/{id}', 'PostsController@show_post');