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

Route::resource('user', 'UserController',[
	'names' => [
		'index'		=>'user',
		'create'	=>'users.create',
		'store'		=>'dozent_speichern'
	],
	'only' => ['index','create','store',]
		
]);

Route::resource('dozent', 'DozentController',[
		'names' => [
			'show'	  =>'dozent_laden',
			'index'	  =>'dozent_laden'
		],
		'only' => ['show','index']

]);

Route::resource('dozent.sprechstunde', 'SprechstundenController',[
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

Route::resource('dozent.sprechstunde.termin', 'TerminController',[
		'names' => [
				'index'  	=>'terminverwaltung',
				'show'		=>'terminanzeige',
				'destroy' 	=>'termin_absagen',
				//Aktualisiert den Termin. Bsp Termin wird aus der Warteliste geholt.
				'update' 	=>'termin_aktualisieren'	
		],
		'only' => ['index','destroy','update','show']
]);

Route::resource('dozent.einstellungen', 'BOptionController',[
		'names' => [
				'index'   =>'dozent_einstellungen',
				'update'  =>'einstellungen_aktualisieren'
		],
		'only' => ['index','update']
]);

Route::resource('dozent.spamlist', 'SpamlistController',[
		'names' => [
				'show'   =>'spamlist_laden',
				'edit'	 =>'spamlist_bearbeiten',
				'update' =>'spamlist_aktualisieren'
		],
		'only' => ['show','edit','update']
]);

Route::resource('terminsuche', 'StudentenTerminController',[
		'names' => [
				'show'   =>'termin_laden',
				'destroy' =>'termin_absagen'
		],
		'only' => ['show','destroy']
]);

Route::resource('dozentsuche', 'SuchController',[
		'names' => [
				'show'   =>'dozent_sprechstunden_suchergebniss',
		],
		'only' => ['show']
]);

Route::resource('dozentsuche.sprechstunde.termin', 'SuchController',[
		'names' => [
				
				'index'		=>'termin_erstellen_ansicht',
				'create'   	=>'termin_erstellen',
				'store'   	=>'termin_speichern'				
		],
		'only' => ['create','store']
]);


