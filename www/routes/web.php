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
// Route::get('/', 'ThreadController@index');
// >>>>>>> master

Route::get('/forumhome', function () {
    return view('items.forumhome');
});
Route::get('/isiforum', function () {
    return view('items.isiforum');
});
Route::get('/tanyaforum', function () {
    return view('items.tanyaforum');
});
Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

Route::resource('Thread', 'ThreadController@index');
=======
Route::resource('thread', 'ThreadController');

