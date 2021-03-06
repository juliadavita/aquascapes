<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'fish', 'description', 'content_image', 'user_id', 'visibility', 'category', 'username'
    ];


    public function user(){
        //A post is owned by a user
        return $this->belongsTo('App\Models\User');
    }
}


