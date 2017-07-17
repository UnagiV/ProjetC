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


Auth::routes();

Route::get('home', 'HomeController@index')->name('home');
Route::group(['middleware' => 'auth'], function () {
    //Inscrit toutes les routes où il faut être connecté pour y accéder
   //Par exemple
   Route::resource('bonintervention','BonInterventionController');
   Route::resource('chargecolla','ChargeCollaController');
   Route::resource('client','ClientController');
   Route::resource('collaborateur','CollaborateurController');
   Route::resource('contact','ContactController');
   Route::resource('facture','FactureController');
   Route::resource('modereglement','ModeReglementController');
});
