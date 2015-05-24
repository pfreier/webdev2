<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class BOption extends Model {
	
	
	//Benachrichtigungseinstellungen eines Dozents
	
	public function dozent(){
		return $this->belongsTo('App/Dozent');
	}

}