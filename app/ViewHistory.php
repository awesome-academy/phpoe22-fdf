<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ViewHistory extends Model
{
    //
    protected $table = 'view_hitories';
    protected $fillable = [
        'user_id',
        'product_id',
        'time',
    ];
    public $timestamps = true;

}
