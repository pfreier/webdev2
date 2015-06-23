<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Sprechstunde extends Model {
	

	protected $table = 'sprechstundes';
	
	protected $fillable = ['datum','dauer', 'uhrzeit', 'raum', 'intervall'];
	
	protected $hidden = ['created_at', 'updated_at'];
	
	public function warteliste(){
		return $this->hasOne('App/Warteliste');
	}

	public function dozent(){
		return $this->belongsTo('App/Dozent');
	}

	public function termine(){
		return $this->hasMany('App/Termin');
	}

}
