<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'gender',
        'role',
        'status',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function productSuggestions()
    {
        return $this->hasMany('App\productSuggestion', 'user_id', 'id');
    }

    public function bills()
    {
        return $this->hasMany('App\Bill', 'user_id', 'id');
    }

    public function rates()
    {
        return $this->hasMany('App\Rate', 'user_id', 'id');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment', 'user_id', 'id');
    }

    // get all products in view_histories
    public function products()
    {
        return belongsToMany('App\Product', 'view_histories', 'user_id', 'product_id');
    }
}
