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

Route::get('/',         'practicaLoginController@home');
Route::get('perfil/',   'practicaLoginController@perfil');
Route::get('recuperar/','practicaLoginController@recuperar');

Route::post('form/',    'practicaLoginController@store');
Route::post('form2/',   'practicaLoginController@store2');
Route::post('signform/','practicaLoginController@store3');

Route::fallback(function () {
    return '<h1>404 de proyecto </h1>';
});
