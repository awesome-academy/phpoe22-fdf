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
        'name', 'email', 'password', 'address', 'phone', 'gender', 'role', 'status'
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

    public function product_suggestions() 
    {
        return $this->hasMany(\App\ProductSuggestion::class);
    }

    public function rates() 
    {
        return $this->hasMany(\App\Rate::class);
    }

    public function comments() 
    {
        return $this->hasMany(\App\Comment::class);
    }

    public function bills() 
    {
        return $this->hasMany(\App\Bill::class);
    }

    public function view_history() 
    {
        return $this->hasMany(\App\ViewHistory::class);
    }
}
