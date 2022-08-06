<?php

namespace App;

use App\Scopes\Globals\ActiveScope;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable, SoftDeletes,HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','created_by','email_verified_at','is_active','image'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * check active users
     */
    protected static function booted()
    {
        static::addGlobalScope(new ActiveScope);
    }

    /**
     * @param $value
     * @return string
     */
    public function getImageAttribute($value): string
    {
        if ($value == null){
            return 'assets/users/profile/default.png';
        }
        return $value;
    }

    /**
     * @param $query
     * @param $email
     * @return mixed
     */
    public function scopeEmail($query,$email)
    {
        return $query->where('email',$email);
    }
}
