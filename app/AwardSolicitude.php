<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AwardSolicitude extends Model
{
    protected $table = 'award_solicitude';
    protected $fillable = ['award_id', 'user_id', 'status'];
}
