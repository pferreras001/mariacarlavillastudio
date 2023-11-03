<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'App\Http\Controllers\PagesController@inicio')->name('inicio');
Route::get('/contacto', 'App\Http\Controllers\PagesController@contacto')->name('contacto');
Route::get('/aviso_legal', 'App\Http\Controllers\PagesController@aviso_legal')->name('aviso_legal');
Route::get('/admin', 'App\Http\Controllers\PagesController@admin')->name('admin');

Route::post('/contacto', 'App\Http\Controllers\PagesController@enviar_contacto')->name('contacto');


//parte de gestion de los usuarios
Route::post('/session_start', 'App\Http\Controllers\UserController@session_start')->name('session_start');
Route::post('/send_register', 'App\Http\Controllers\UserController@send_register')->name('send_register');
Route::get('/confirmacion', 'App\Http\Controllers\UserController@confirmar')->name('confirmar');
Route::get('/signup_form/{code}', 'App\Http\Controllers\UserController@signup_form')->name('signup_form');
Route::post('/signup_update', 'App\Http\Controllers\UserController@signup_update')->name('signup_update');
Route::get('/recover_password', 'App\Http\Controllers\UserController@password_recovery')->name('recover_password');
Route::post('/recover_password', 'App\Http\Controllers\UserController@send_recover')->name('send_recover');
Route::get('/recover_form/{id}', 'App\Http\Controllers\UserController@recover_form')->name('recover_form');
Route::post('/update_pass', 'App\Http\Controllers\UserController@update_pass')->name('update_pass');
Route::put('/logout', 'App\Http\Controllers\UserController@logout')->name('logout');

//rutas para el blog
Route::get('/blog', 'App\Http\Controllers\BlogController@blog')->name('blog');
Route::post('/blog', 'App\Http\Controllers\BlogController@blog_search')->name('blog');
Route::get('/create_entry', 'App\Http\Controllers\BlogController@create_entry')->name('create_entry');
Route::post('/insert_entry', 'App\Http\Controllers\BlogController@insert_entry')->name('insert_entry');
Route::get('/show_entry/{id}', 'App\Http\Controllers\BlogController@show_entry')->name('show_entry');
Route::get('/edit_entry/{id}', 'App\Http\Controllers\BlogController@edit_entry')->name('edit_entry');
Route::post('/edit_entry', 'App\Http\Controllers\BlogController@update_entry')->name('update_entry');
Route::get('/delete_entry/{id}', 'App\Http\Controllers\BlogController@delete_entry')->name('delete_entry');