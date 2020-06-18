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

Route::get('/', 'HomeController@home');

Route::get('/about', 'PagesController@about');

Route::get('/mahasiswa', 'StudentsController@index');


// details:

Route::get('/details', 'DetailsController@index');

// dalam pembuatan route algoritmanya harus tepat, misal apabila /details/create diletakkan dibawah /details/{students} maka error

Route::get('/details/create', 'DetailsController@create');

Route::get('/details/{student}', 'DetailsController@show');

Route::post('/details', 'DetailsController@store'); // untuk mempost di form details

Route::delete('/details/{student}', 'DetailsController@destroy');

Route::get('/details/{student}/edit', 'DetailsController@edit');

Route::patch('/details/{student}', 'DetailsController@update');

// seluruh route code diatas dapat digantikan dengan route dibawah ini jika ingin membuat system CRUD dengan syarat namanya tidak boleh seperti diatas contoh yang tepat /students/{student}
// Route::resource('details', 'DetailsController');