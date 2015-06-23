<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class BOption extends Model {
	
	
	protected $table = 'b_options';

	protected $fillable = ['option1', 'option2', 'option3', 'option4'];

	protected $hidden = ['created_at', 'updated_at','id'];
	
	
	public function dozent(){
		return $this->belongsTo('App/Dozent');
	}

}