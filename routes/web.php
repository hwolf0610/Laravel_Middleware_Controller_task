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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/my-page', function () {
    return view('my-page');
});


Route::get('helloworld', 'HelloWorldController@index');


// Route::get('/table/{number?}', 'TableController@create')→where('number', '[0-9]+');

Route::resource('book', 'BookController');

Route::resource('book', 'BookController', ['only' => [
    'index', 'show'
 ]]);
 Route::resource('book', 'BookController', ['except' => [
    'create', 'store', 'update', 'destroy'
 ]]);


 Route::post('/books','BooksController@store')->middleware('year');
Route::put('/books/{book}','BooksController@update')->middleware('year');

Route::get("check-md",["uses"=>"HomeController@checkMD","middleware"=>"checkType"]);
