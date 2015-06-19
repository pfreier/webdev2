<?php namespace App;

use Illuminate\Database\Eloquent\Model;
class Dozent extends Model {
	

	protected $table = 'dozents';
	
	protected $fillable = ['vorname', 'nachname'];
	
	protected $hidden = ['created_at', 'updated_at','id','userID'];
	
	public function user(){
		return $this->belongsTo('App/User');
	}

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