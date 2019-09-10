<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BillProduct extends Model
{
    //
    protected $table = 'bill_product';
    protected $fillable = [
        'bill_id',
        'product_id',
        'quantity',
    ];
    public $timestamps = false;
}
