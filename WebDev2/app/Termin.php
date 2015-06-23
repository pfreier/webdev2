<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Termin extends Model {


	protected $table = 'termins';
	
	protected $fillable = ['dauer','vorname', 'nachname', 'kurzBetreff', 'langBetreff','besteatigt',''];
	
	protected $hidden = ['created_at', 'updated_at','id'];
	
	
	public function sprechstunde(){
		return $this->belongsTo('App/Sprechstunde');
	}

}