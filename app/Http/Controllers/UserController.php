<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
  public static function register()
	{
		return view('principal.registrarse');
	}

	public static function login()
	{
		return view('principal.login');
	}
}
