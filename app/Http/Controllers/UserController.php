<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
  public static function register()
	{
    $var="Registrase";
		return view('principal.registrarse',['var'=>$var]);
	}

	public static function login()
	{
    $var="Login";
		return view('principal.login',['var'=>$var]);
	}
}
