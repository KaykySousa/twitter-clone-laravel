<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TwitterUsers extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'username', 'email', 'password'];

    public function posts() {
        return $this->hasMany('App\Models\TwitterPosts', 'user_id');
    }
}
