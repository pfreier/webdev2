<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Email extends Model {

	//Email des Studenten

	public function spamlist(){
		return $this->belongsTo('App/Dozent_Spamlist');
	}

}
