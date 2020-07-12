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

use Illuminate\Support\Facades\Route;

Route::get('/', 'ThreadController@index');

Route::get('/forumhome', 'ThreadController@index');
Route::get('/thread/post/{id}', 'ThreadController@show');
Route::get('/tanyaforum', 'ThreadController@create');
Route::get('/answer/{id}/edit', 'AnswerController@show');
Route::get('/comment/{id}/edit', 'CommentController@show');
Auth::routes();

// Answer
Route::post('/answer', 'AnswerController@store');
Route::put('/answer', 'AnswerController@update');
Route::delete('/answer', 'AnswerController@destroy');

// Comment
Route::post('/comment', 'CommentController@store');
Route::put('/comment', 'CommentController@update');
Route::delete('/comment', 'CommentController@destroy');



Route::get('/home', 'HomeController@index')->name('home');

Route::resource('Thread', 'ThreadController@index');

Route::resource('thread', 'ThreadController');

Route::resource('thread', 'ThreadController');

// Voting system
Route::get('/upvote/{thread}/thread', 'VoteController@upvote');
Route::get('/downvote/{thread}/thread', 'VoteController@downvote');
Route::get('/upvote/{answer}/answer', 'VoteController@upvote_answer');
Route::get('/downvote/{answer}/answer', 'VoteController@downvote_answer');

// Pinned System
Route::get('/answer/{id}/pinned', 'ThreadController@pinned');
Route::get('/answer/{id}/unpinned', 'ThreadController@unpinned');

// Tag
Route::get('/tag/{tag}', 'TagController@index');
