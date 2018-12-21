<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Events\UserRegistered;
use App\Stats;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function stats()
    {
        return new Stats($this);
    }

    public function favorites()
    {
        return $this->hasMany(Favorite::class);
    }
    // 밑에처럼 하다보면 괴물처럼 불어남.
    /*public function favoritesCount()
    {
        return $this->favorites()->count();
    }*/
}
