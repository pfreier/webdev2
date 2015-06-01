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
//Benutzername als Wildcard
Route::pattern('dozent','[a-z]+');
//Datum als Wildcard Datumsformat TTMMJJJJ
Route::pattern('sprechstunde','[0-9]+');
//Datum als Wildcard Datumsformat TTMMJJJJ
Route::pattern('termin','[0-9]+');


//Route Model Binding
Route::bind('dozent', function($vorname){
	return App\Dozent::where('vorname',$vorname)->first();
});


/*
 * This single route declaration creates multiple routes 
 * to handle a variety of RESTful actions on the 
 * user resource. 
 * Likewise, the generated controller will already have 
 * stubbed methods for each of these actions with notes 
 * informing you which URIs and verbs they handle.
 * 
 **/
Route::resource('login', 'UserController',[
	'names' => [
		//Laden der Index Page
		'index'		=>'index_page',
		//Dozent klickt auf Registrieren 
		'create'	=>'dozent_erstellen',
		//Eingaben des Dozenten speichern und einen 
		//neuen Benutzer anlegen
		'store'		=>'dozent_speichern'	
	],
	'only' => ['index','create','store']
		
]);

Route::resource('dozent', 'DozentController',[
		'names' => [
			//Laedt die Ansicht des Benutzers
			'show'	  =>'dozent_laden',
			//'destroy' =>'dozent_loeschen',
		],
		'only' => ['show']

]);

Route::resource('dozent.sprechstunde', 'SprechstundenController',[
	'names' => [
		//Laedt die Sprechstundenverwaltung
		'index'   =>'sprechstundenverwaltung',
		//oeffnet das Formular zum anlegen einer Sprechstunde
		'create'  =>'sprechstunde_anlegen',
		'store'	  =>'sprechstunde_speichern',
		'show'	  =>'sprechstunde_laden',
		'destroy' =>'sprechstunde_loeschen',
		'edit'	  =>'sprechstunde_bearbeiten',
		'update'  =>'sprechstunde_aktualisieren'
	]
]);
Route::resource('dozent.sprechstunde.termine', 'TerminController',[
		'names' => [
				'index'   =>'terminverwaltung',
				'destroy' =>'termin_absagen',
				//Aktualisiert den Termin. Bsp Termin wird aus der Warteliste geholt.
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

Route::resource('dozent.einstellungen.spamlist', 'EinstellungenController',[
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


Route::resource('dozent.suche.sprechstunde', 'SuchController',[
		'names' => [
				'show'   =>'dozent_sprechstundenListe',
		],
		'only' => ['show']
]);
