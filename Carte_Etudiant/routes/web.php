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
Route::get('/accueil', function () {
    return view('accueil');
})->name('accueil');

Route::get('/', function () {
    return view('authentification');
})->name('authentification');


Auth::routes();
Route::resource('/etudiants', 'EtudiantsController');
Route::resource('/cartes', 'CartesController');
Route::resource('/filieres', 'FilieresController');
Route::resource('/nationalites', 'NationalitesController');
Route::resource('/niveaux', 'NiveauxController');
Route::resource('/promotions', 'PromotionsController');
Route::resource('/tuteurs', 'TuteursController');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/emails', 'EmailsController@create')->name('email');
Route::post('/emails', 'EmailsController@store');
Route::get('/pdf/{etudiant}', 'CartesController@pdf');

