<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('front-end.index');
});

Auth::routes();

Route::get('/entreprise-register', 'EntrepriseController@register');
Route::post('/entreprise-create', 'EntrepriseController@create');
Route::get('/entreprise-confirm/{token}', 'EntrepriseController@confirm')->name('confirm');

// Voici les routes des Régions

Route::get('/regions', 'Admin\RegionController@index');
Route::post('/regions/store', 'Admin\RegionController@store');

Route::get('/auto-user', 'Admin\RegionController@autoUser');
// Fin des routes des Régions


// Voici les routes des Paniers

Route::get('/paniers', 'Admin\PanierController@index');
Route::post('/paniers/store', 'Admin\PanierController@store');
Route::get('/paniers/update/{id}', 'Admin\PanierController@update');
Route::post('/paniers/update/save', 'Admin\PanierController@save');

// Fin des routes de Paniers

Route::get('/home', 'HomeController@index')->name('home');

// voici les routes des Tarifs

Route::get('/tarifs', 'Admin\TarifController@index');
Route::post('/tarifs/store', 'Admin\TarifController@store');
Route::get('/tarifs/update/{id}', 'Admin\TarifController@update');

// Fin route des Tarifs


