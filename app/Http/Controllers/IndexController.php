<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class IndexController extends Controller
{
    public function index()
    {
        $banner = App\Banner::find(1);
        // dd($banner);

        return view('principal.index', compact('banner'));
    }
}
