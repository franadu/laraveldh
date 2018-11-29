<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Product;
use \App\Category;

class HomeController extends Controller
{
	public static function index()
	{
		$products=Product::all();
		$categories=Category::paginate(10);
		return view('principal.home',compact('products','categories'));
	}
}
