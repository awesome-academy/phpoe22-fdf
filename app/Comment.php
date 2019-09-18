<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['user_id', 'product_id', 'content', 'time', 'status'];

    public function user() {
    	return $this->belongsTo(\App\User::class);
    }

    public function product() {
    	return $this->belongsTo(\App\Product::class);
    }
}
