<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table = 'categories';
    protected $fillable = [
        'name',
        'parent_id',
    ];
    public $timestamps = false;

    public function products()
    {
        return $this->belongsToMany('App\Product', 'category_product', 'category_id', 'product_id');
    }

    public function categories(){
        return $this->hasMany('App\Category', 'parent_id', 'id');
    }

    public function category(){
        return $this->belongsTo('App\Category', 'parent_id', 'id');
    }
}
