<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Http\Resources\CategoryCollection;

class CategoryController extends Controller
{
  public function show($request)
	{

		$category = \App\Category::where('name',$request)->get();
    if ($category=='[]'){ $products="";} else {$products=$category[0]->products;}
		return view("/principal/category",compact("category","products"));
	}

  public static function apiIndex()
  {
    return new CategoryCollection(Category::all());
  }
  public static function apiCategoryProduct()
  {
    $Categories= Category::all();
    foreach ($Categories as $category) {
      $prodcat[$category->name]=$category->products;
    }
    return new CategoryCollection($Categories);
  }
}
