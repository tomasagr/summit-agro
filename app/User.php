<?php

namespace App;

use App\Avatar;
use App\Solicitude;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
    protected $fillable =  [
        "first_name",
        "last_name",
        "dni",
        "cuit",
        "phone",
        "address",
        "email",
        "password",
        "type",
        "agronomy",
        "agronomy_type",
        "birthday",
        "size",
        "civil_status",
        "aniversario",
        "childrens",
        "sports",
        "hobby",
        "team",
        "points",
        "status",
        "image"
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    'password', 'remember_token',
    ];

    public function getBirthdayAttribute()
    {
        return Carbon::parse($this->attributes['birthday'])->format('Y-m-d');
    }

    public function setBirthdayAttribute($date)
    {
        $this->attributes['birthday'] = gmdate('Y-m-d H:i:s', strtotime($date));
    }

    public function setAniversarioAttribute($date)
    {
        $this->attributes['aniversario'] = Carbon::parse($date)->format('Y-m-d H:i:s');
    }

    public function getAniversarioAttribute()
    {
        if (is_null($this->attributes['aniversario'])) {
            return $this->attributes['aniversario'];
        }

        return Carbon::parse($this->attributes['aniversario'])->format('Y-m-d');
    }

    public function setPasswordAttribute($value)
    {
        if (!empty($value)) {
            $this->attributes['password'] = Hash::make($value);
        }
    }

    public function solicitudes()
    {
        return $this->hasMany(Solicitude::class, 'user_id');
    }

    public function awardSolicitude()
    {
        return $this->hasMany(AwardSolicitude::class, 'user_id');
    }

    public function avatar()
    {
        return $this->hasOne(Avatar::class, 'user_id');
    }
}
