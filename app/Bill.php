<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $fillable = ['user_id', 'status'];

    public function user() 
    {
    	return $this->belongsTo(\App\User::class);
    }

    public function products() 
    {
    	return $this->belongsToMany(\App\Product::class)->withPivot('quantity');
    }
}
