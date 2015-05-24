<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Dozent extends Model {
	
	// Ein Dozent

	public function b_optionen(){
		return $this->hasOne('App/BOption');
	}

	public function sprechstunden(){
		return $this->hasMany('App/Sprechstunde');
	}

	public function spamlist(){
		return $this->hasOne('App/Spamlist');
	}

}