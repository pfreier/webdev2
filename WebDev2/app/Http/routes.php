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

//Route::get('user', ['middleware' => 'DozentAuth', 'uses' => 'UserController@index']);
Route::get('/home', 'WelcomeController@index');
/*
 * This single route declaration creates multiple routes 
 * to handle a variety of RESTful actions on the 
 * user resource. 
 * Likewise, the generated controller will already have 
 * stubbed methods for each of these actions with notes 
 * informing you which URIs and verbs they handle.
 * 
 **/
Route::resource('user', 'UserController',[
	'names' => [
		'index'   =>'dozent_view',
		'create'  =>'dozent_erstellen',
		'store'	  =>'dozent_speichern',
		'show'	  =>'dozent_laden',
		'destroy' =>'dozent_loeschen',		
	],
	'except' => ['edit','update']
		
]);
Route::resource('user.sprechstunde', 'SprechstundenController',[
	'names' => [
		'index'   =>'sprechstundenverwaltung',
		'create'  =>'sprechstunde_anlegen',
		'store'	  =>'sprechstunde_speichern',
		'show'	  =>'sprechstunde_laden',
		'destroy' =>'sprechstunde_loeschen',
		'edit'	  =>'sprechstunde_bearbeiten',
		'update'  =>'sprechstunde_aktualisieren'
	]
]);
Route::resource('user.sprechstunde.termine', 'TerminController',[
		'names' => [
				'index'   =>'terminverwaltung',
				'destroy' =>'termin_absagen',
				'update'  =>'termin_aktualisieren'
		],
		'except' => ['create','store','show','edit']
]);

// Route::resource('user.einstellungen', 'BOptionController',[
// 		'names' => [
// 				'index'   =>'dozent_einstellungen',
// 				'update'  =>'einstellungen_aktualisieren'
// 		],
// 		'except' => ['create','store','show','edit','destroy']
// ]);

Route::resource('user.einstellungen.spamlist', 'SpamlistController',[
		'names' => [
				'show'   =>'einstellungen_laden',
				'edit'	 =>'spamlist_bearbeiten',
				'update' =>'einstellungen_aktualisieren'
		],
		'only' => ['show','edit','update']
]);

Route::resource('termin', 'TerminController',[
		'names' => [
				'show'   =>'termin_laden',
				'update' =>'termin_aktualisieren'
		],
		'only' => ['show','update']
]);

Route::resource('suche.dozent', 'SuchController',[
		'names' => [
				'show'   =>'dozent_sprechstunden_suchergebniss',
		],
		'only' => ['show']
]);

Route::resource('suche.dozent.sprechstunde.termin', 'SuchController',[
		'names' => [
				'create'   =>'termin_erstellen',
				'store'   =>'termin_speichern'				
		],
		'only' => ['create','store']
]);

