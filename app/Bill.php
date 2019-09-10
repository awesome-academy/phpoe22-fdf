<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    //
    protected $bill = 'bills';
    protected $fillable = [
        'user_id',
        'status',
    ];
    public $timestamps = true;

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function products()
    {
        return $this->belongsToMany(
            'App\Product',
            'bill_product',
            'bill_id',
            'product_id'
        )->withPivot('quantity');
    }
}
