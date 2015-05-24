<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Spamlist extends Model {

	//Die Spamliste eines Dozenten.

	public function emails(){
		return $this->hasMany('App/Email');
	}

	public function dozent(){
		return $this->belongsTo('App/Dozent');
	}

}
