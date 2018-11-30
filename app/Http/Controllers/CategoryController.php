<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
  public function show($request)
	{
		$category = \App\Category::where('name',$request)->get();
    $products=$category[0]->products;
		return view("/principal/category",compact("category","products"));
	}
}
