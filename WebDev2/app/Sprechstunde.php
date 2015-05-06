<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Sprechstunde extends Model {

	//
	public function warteliste(){
		return $this->hasOne('App/Warteliste');
	}

	public function dozent(){
		return $this->belongsTo('App/Dozent');
	}

}
