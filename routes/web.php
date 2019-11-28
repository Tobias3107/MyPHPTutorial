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

// Homepage
Route::get('/', 'PagesController@index');

// Dokumentation
Route::get('/dokumentation', 'PagesController@dokumentation');

// Kurs
Route::get('/kurs/', 'PagesController@kurs');
Route::get('/kurs/{kursId}', 'PagesController@kursTab');
Route::get('/kurs/{kursId}/tab/{order}', 'PagesController@tab');
Route::get('/kurs/{kursId}/maxtabs', 'PagesController@maxTab');

// Impressum
Route::get('/impressum/', 'PagesController@impressum');

// Admin Control Panel 
Route::get('/admin', 'AdminController@index');
Route::get('/admin/kurs', 'AdminController@kurs');
Route::get('/admin/dokumentation', 'AdminController@doku');

// Standard Auth
Auth::routes();

Route::get('/sophia', function () {
    die("Ich Liebe Sophia");
});
Route::get('/{test}', function ($test) {
    die($test);
});