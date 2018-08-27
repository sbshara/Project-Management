<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'name',
		'description',
		'active',
		'progress',
		'company_id',
		'user_id',
    ];
	
	public function tasks() 
	{
		return $this->hasMany('App\Task');
	}
	
	public function posts() 
	{
		return $this->hasMany('App\Post');
	}
	
	public function user() 
	{
		return $this->belongsTo('App\User');
	}
	
	public function company() 
	{
		return $this->belongsTo('App\Company');
	}
	
}
