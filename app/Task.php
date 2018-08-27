<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Project;
use App\Comment;
use App\Status;

class Task extends Model
{
    protected $fillable = [
        'name',
		'description',
		'duration',
		'user_id',
		'project_id',
		'status_id',
    ];
	
	public function comments() 
	{
		return $this->hasMany('App\Comment');
	}
	
	public function project() 
	{
		return $this->belongsTo('App\Project');
	}
	
	public function users() 
	{
		return $this->belongsTo('App\User');
	}
	
	public function taskStatus ()
	{
		return Status::find($this->status_id);
	}

	public function taskProject ()
	{
		return Project::find($this->project_id);
	}
	
	public function taskUser ()
	{
		return Status::find($this->user_id);
	}
	
}
