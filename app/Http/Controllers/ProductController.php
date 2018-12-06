<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Http\Resources\ProductsCollection;

class ProductController extends Controller
{
  public static function apiIndex()
	{
		return  new ProductsCollection(Product::all());
	}
}
