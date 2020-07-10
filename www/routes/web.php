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

// <<<<<<< master
// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/master', function () {
//     return view('templateforum.master');
// });

// Route::get('/masuk', function () {
//     return view('masuk');
// });
// =======
//
// >>>>>>> master

Route::get('/', 'ThreadController@index');

Route::get('/forumhome', 'ThreadController@index');
Route::get('/thread/post/{id}', 'ThreadController@show');
Route::get('/tanyaforum', 'ThreadController@create');
Route::get('/thread/post/{$id}', function (){
    return view('items.isiforum');
});
Auth::routes();

<<<<<<< HEAD
// Answer
Route::post('/answer', 'AnswerController@store');



Route::get('/home', 'HomeController@index')->name('home');

Route::resource('Thread', 'ThreadController@index');

Route::resource('thread', 'ThreadController');

=======
Route::resource('thread', 'ThreadController');

// Voting system
Route::get('/upvote/{thread}/thread', 'VoteController@upvote');
Route::get('/downvote/{thread}/thread', 'VoteController@downvote');
>>>>>>> vote-feature
