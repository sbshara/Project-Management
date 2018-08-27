<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Project;
use App\Company;

class Company extends Model
{
    protected $fillable = [
        'name',
		'description',
		'logo',
		'user_id',
    ];

	public function projects() 
	{
		return $this->hasMany(Project::class);
	}
	
	public function companyProjects() 
	{
		$projects = Project::where('company_id', $this->id)->get();
		return $projects;
	}
	
	public function user()
	{
		return User::find($this->user_id);
	}
	
}
