<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'id', 
        'brand_id',
        'name',
        'model'
    ];

    

}
