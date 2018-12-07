<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $fillable = ['product_id', 'discount', 'new_price', 'url'];
}
