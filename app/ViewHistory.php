<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ViewHistory extends Model
{
	protected $fillable = ['user_id', 'product_id', 'time'];

	public $timestamps = true;

	public function user() {
		return $this->belongsTo(\App\User::class);
	}

	public function product() {
		return $this->belongsTo(\App\Product::class);
	}
}
