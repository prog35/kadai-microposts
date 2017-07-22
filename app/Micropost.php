<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Micropost extends Model
{
    protected $fillable = ['content', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    // お気に入り機能
    public function favoriteUsers() 
    {
        return $this->belongsToMany(User::class, 'user_favorite', 'micropost_id', 'user_id')-withTimestamps();
    }

}
