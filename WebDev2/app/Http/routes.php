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


Route::resource('user', 'UserController');
Route::resource('user.sprechstunde', 'SprechstundenController');
Route::resource('user.sprechstunde.termin', 'TerminController');
Route::resource('user.sprechstunde.warteliste', 'WartelistenController');
Route::resource('user.einstellungen', 'BOptionController');
Route::resource('termin', 'TerminController');
Route::resource('dozent.sprechstunde', 'SprechstundenController');


