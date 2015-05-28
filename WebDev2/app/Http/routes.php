<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*
 * This single route declaration creates multiple routes 
 * to handle a variety of RESTful actions on the 
 * user resource. 
 * Likewise, the generated controller will already have 
 * stubbed methods for each of these actions with notes 
 * informing you which URIs and verbs they handle.
 * 
 **/
Route::resource('users', 'UserController');
Route::resource('users.sprechstunde', 'SprechstundenController');
Route::resource('users.sprechstunde.termin', 'TerminController');
Route::resource('users.einstellungen', 'BOptionController');

Route::resource('termin', 'TerminController');

Route::resource('dozent.sprechstunde', 'SprechstundenController');


