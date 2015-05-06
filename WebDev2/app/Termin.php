<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Termin extends Model {

	//
	public function sprechstunde(){
		return $this->belongsTo('App/Sprechstunde');
	}

}
