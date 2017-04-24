<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use Auth;

class AuthController extends Controller
{

    public function registro()
    {
    	return view('auth.registro');
    }

    public function datosRegistro(Request $request)
    {
    	$roles = implode(',', $request->input('rol'));

    	User::create([
            
            'nom_completo' => $request->input('nom_completo'),
            'no_cuenta' => $request->input('no_cuenta'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'rol' => $roles,
    		]);

    	
    }

    public function login()
    {
    	return view('auth.login');
    }

    public function datosLogin(Request $request)
    {
    	$no_cuenta = $request->input('no_cuenta');
    	$password = $request->input('password');

    	if(!Auth::attempt(['no_cuenta' => $no_cuenta, 'password' => $password]))
    	{
    		return redirect()->back()->with('info', 'Datos Incorrectos');
    	}

    	else
    	{
    		return redirect()->route('home')->with('info', 'Estas adentro');
    	}
    }

    public function salir()
    {
    	Auth::logout();

    	return redirect()->route('login');
    }
}


























