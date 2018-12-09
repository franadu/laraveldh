<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
  public static function loadProductsCategories()
	{
		$var = 'Form for adding Products';
		return view('auth/loadProductsCategories',['var' => $var]);
	}

	public static function catalog()
	{
		$var = 'Catalog';
		return view('auth/catalog',['var'=>$var]);
	}
}
