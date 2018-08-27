<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;
use App\Task;

class Comment extends Model
{
    protected $fillable = [
        'body',
		'url',
		'commentable_type',
		'commentable_id',
		'user_id',
    ];
	
	public function user() 
	{
		return $this->belongsTo('App\User');
	}
	
	public function commentOn()
	{
		if ($this->commentable_type === 'Post'){
			return Post::find($this->commentable_id);
		} else {
			return Task::find($this->commentable_id);
		}
		endif
	}
	
}
