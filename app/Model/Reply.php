<?php

namespace App\Model;
use App\User;
use App\Model\Category;
use App\Model\Like;



use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    public function question() 
    {
        return $this->belongsTo(Question::class);
    }

    public function user() 
    {
        return $this->belongsTo(User::class);
    }


    public function Like() 
    {
        return $this->hasMany(Like::class);
    }
}
