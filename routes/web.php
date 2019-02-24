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



Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/contact', 'TicketsController@create')->name('contact');
Route::post('/contact', 'TicketsController@store');

Route::get('/tickets', 'TicketsController@index')->name('ticket');
Route::get('/tickets/{slug}', 'TicketsController@show');


Route::get('/tickets/{slug?}/edit', 'TicketsController@edit');
Route::post('/tickets/{slug?}/edit', 'TicketsController@update');

Route::post('/tickets/{slug}/delete', 'TicketsController@destroy');

//mail
Route::get('/sendemail', function () {
    $data = array(
        'name' => "Testing Ticketing"
    );

    Mail::send('emails.welcome', $data, function ($message) {
        $message->from('admin@gmail.com', 'Ticketing Operational');
        $message->to('satriyopamungkas@gmail.com')->subject('testing ticketing email');
    });

    return "your email has been sent succesfully";
});