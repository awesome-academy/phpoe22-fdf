<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductSuggestion extends Model
{
    protected $table = 'product_suggestions';
    protected $fillable = ['user_id', 'name', 'description', 'image', 'status'];

    public function user() {
    	return $this->belongsTo(\App\User::class);
    }
}
