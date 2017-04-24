<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginasController extends Controller
{

	function __construct()
	{
		return $this->middleware('auth');
	}

    public function home()
    {
    	return view('home');
    }


}
