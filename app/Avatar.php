<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avatar extends Model
{
    protected $table = 'avatars';
    protected $fillable = ['meta', 'name', 'japanese'. 'user_id'];
}
