<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'parent_id'];

    public function products() 
    {
    	return $this->belongsToMany(\App\Product::class);
    }

    public function categories()
    {
        return $this->hasMany(\App\Category::class, 'parent_id', 'id');
    }

    public function category()
    {
        return $this->belongsTo(\App\Category::class, 'parent_id', 'id');
    }
}
