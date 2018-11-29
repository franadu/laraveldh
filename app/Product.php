<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \App\Cart;
use \App\Category;

class Product extends Model
{
	public function categories()
	{
		return $this->hasMany(Category::class);
	}
	public function carts()
	{
		return $this->hasMany(Cart::class)
	}
}
