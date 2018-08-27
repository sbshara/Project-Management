<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Post;

class Category extends Model
{
    protected $fillable = [
        'name',
		'description',
		'user_id',
    ];
	
	public function user()
	{
		return User::find($this->user_id);
	}
	
	public function posts()
	{
		return $this->belongsToMany(Post::class);
	}
}
