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

Route::get('/etudiants', function () {
    return view('/etudiants/liste');
})->name('etudiant');

Route::get('/etudiants/form', function () {
    return view('/etudiants/form');
})->name('form');


Route::get('/cartes/carte', function () {
    return view('/cartes/carte');
})->name('carte');

Route::get('/', function () {
    return view('authentification');
})->name('authentification');

Route::get('/email', function () {
    return view('email');
})->name('email');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// Route::get('/etudiants', function () {
//     return view('/etudiants/form');
// })->name('etudiant');