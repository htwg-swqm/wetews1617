<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

/*
 * New blade views
 */

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/species/{id}', 'SpeciesController@show')->middleware('auth');

Route::get('/species_search', 'SpeciesController@search')->middleware('auth');

/*
 * Old php views
 */

Route::get('/plants', function () {
    return view('showPlants');
});

Route::get('/createExamples', function () {
    return view('createExample');
});

/**
 * Added for authentication
 */

Auth::routes();

