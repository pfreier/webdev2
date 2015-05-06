<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Warteliste extends Model {
	
	//Warteliste einer Sprechstunde

	public function termine(){
		return $this->hasMany('App/Termine');
	}

	public function sprechstunde(){
		return $this->belongsTo('App/Sprechstunde');
	}

}
