<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
	public static function index()
	{
		$products= \App\Product::all();
		return view('principal.home',compact('products'));
	}
}
