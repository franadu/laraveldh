<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Category;
use \App\Product;

class PurchaseController extends Controller
{
  public function show($name,$id)
	{
		$category=Category::where('name',$name)->get();
		$product=Product::find($id);
		return view('principal.purchase',compact('category','product'));
	}
}
