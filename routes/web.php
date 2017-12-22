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
*/
Route::get('/', function () {
    return 'show all posts';
});



Route::get('/about', function () {
    return 'God is Good all the Time';
});


Route::get('/post/create', function () {
    return "create page";
});

Route::post('/post', function () {
    return "store data";
});

Route::get('/post/{title}', function () {
    return "show single post";
});
Route::get('/post/{title}/edit', function ($title) {
    return "edit post";
});
Route::put('/post/{title}', function ($title) {
    return "save updated  post";
});
Route::delete('/post/{title}/edit', function ($title) {
    return "delete post";
});
