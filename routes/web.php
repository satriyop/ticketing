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

//Route::get('/', function () {
//    return view('welcome');
//})
// Route::get('/', function () {
//     return 'Hello World';
// });
// Route::view('/welcome', 'welcome');
// Route::get('/user/{id}', function ($id) {
//     return 'User ID '.$id;
// });
// Route::get('/posts/{post}/comments/{comment}', function ($post, $comment) {
//     return 'Post Title : '.$post . ' Comment : '.$comment;
// });


Route::get('/', 'PagesController@home');

Route::get('/contact', 'TicketsController@create');
Route::post('/contact', 'TicketsController@store');

Route::get('/users/register', 'Auth\RegisterController');

