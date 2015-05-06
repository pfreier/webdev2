<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Dozent extends Model {
	
	// Ein Dozent

	public function b_optionen(){
		return $this->hasOne('App/B_Optionen');
	}

	public function sprechstunden(){
		return $this->hasMany('App/Sprechstunden');
	}

}
