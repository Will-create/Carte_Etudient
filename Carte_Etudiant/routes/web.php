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

Route::get('/liste', function () {
    return view('/etudiants/liste');
})->name('etudiant');

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
Route::resource('/etudiants', 'EtudiantsController');
Route::get('/home', 'HomeController@index')->name('home');
<<<<<<< HEAD:Carte_Etudiant/routes/web.php
Route::get('/cartes','CartesController@index')->name('carte');

=======
Route::get('/cartes', 'CartesController@index')->name('carte');
Route::get('/etudiants', 'EtudiantsController@index')->name('Etudiants.liste');
>>>>>>> 3cd9ed74e098d9e8336adc20c56cfd5375e38020:Carte_Etudiant/routes/web.php
