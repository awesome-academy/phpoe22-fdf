<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table = 'products';
    protected $fillable = [
        'name',
        'price',
        'description',
        'quantity',
        'sale',
    ];
    public $timestamps = false;

    public function images()
    {
        return $this->hasMany('App\Image', 'product_id', 'id');
    }

    public function categories()
    {
        return $this->belongsToMany('App\Category', 'category_product', 'product_id', 'category_id');
    }

    public function rates()
    {
        return $this->hasMany('App\Rate', 'product_id', 'id');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment', 'product_id', 'id');
    }

    // get all users from view_histories
    public function users()
    {
        return belongsToMany('App\User', 'view_histories', 'product_id', 'user_id');
    }

    public function bills()
    {
        return $this->belongsToMany(
            'App\Bill',
            'bill_product',
            'product_id',
            'bill_id'
        )->withPivot('quantity');
    }
}
