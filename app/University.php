<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    protected $fillable = [
                'user_id','univ_name', 'major', 'publication_status',
    ];

    public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function post()
	{
		return $this->hasMany(Post::class);
	}
}
