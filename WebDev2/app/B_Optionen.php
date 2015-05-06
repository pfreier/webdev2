<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class B_Optionen extends Model {
	
	//Benachrichtigungseinstellungen eines Dozents

	public function dozent(){
		return $this->belongsTo('App/Dozent');
	}

}
