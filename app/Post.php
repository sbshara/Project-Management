<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Category;

class Post extends Model
{
    protected $fillable = [
        'body',
		'user_id',
		'category_id',
    ];
	
	public function comments() 
	{
		return $this->hasMany('App\Comment');
	}
	
	public function user()
	{
		return User::find($this->user_id);
	}
	
	public function category()
	{
		return Category::find($this->category_id);
	}
}
