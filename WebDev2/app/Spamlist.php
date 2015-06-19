<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Spamlist extends Model {


	protected $table = 'spamlists';
	
	protected $fillable = ['dozentID','emailID'];
	
	protected $hidden = ['created_at', 'updated_at','id'];

	public function emails(){
		return $this->hasMany('App/Email');
	}

	public function dozent(){
		return $this->belongsTo('App/Dozent');
	}

}
