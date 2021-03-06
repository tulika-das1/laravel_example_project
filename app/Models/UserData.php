<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class UserData extends Authenticatable
{
    use HasFactory;

    public function posts()
    {
        return $this->hasMany(BlogPost::class, 'user_id');
    }
}
