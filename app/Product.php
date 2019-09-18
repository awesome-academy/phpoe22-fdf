<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'price', 'description', 'quantity', 'sale'];

    public function images() 
    {
    	return $this->hasMany(\App\Image::class);
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
    	return $this->belongsToMany(\App\Bill::class);
    }

    public function view_history() 
    {
        return $this->hasMany(\App\ViewHistory::class);
    }

    public function categories() 
    {
    	return $this->belongsToMany(\App\Category::class);
    }
}
