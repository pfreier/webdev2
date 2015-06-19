<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Warteliste extends Model {
	

	protected $table = 'wartelistes';
	
	protected $fillable = ['terminID','sprechstundeID'];
	
	protected $hidden = ['created_at', 'updated_at','id'];

	public function termine(){
		return $this->hasMany('App/Termine');
	}

	public function sprechstunde(){
		return $this->belongsTo('App/Sprechstunde');
	}

}