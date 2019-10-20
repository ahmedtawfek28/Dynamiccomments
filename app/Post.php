<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
        protected $table = 'posts'; 
         protected $primaryKey = 'id'; 
          protected $fillable = ['id','name']; 
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}
