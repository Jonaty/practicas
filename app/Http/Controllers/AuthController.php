<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\Plantel;

use Auth;

class AuthController extends Controller
{

    public function registro()
    {
        $planteles = Plantel::all();
    	return view('auth.registro', compact('planteles'));
    }

    public function datosRegistro(Request $request)
    {
        //dd($request->all());

    	//$roles = implode(',', $request->input('rol'));

    	User::create([
            
            'nom_completo' => $request->input('nom_completo'),
            'no_cuenta' => $request->input('no_cuenta'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'rol' => $request->input('rol'),
            'plantel_id' => $request->input('plantel_id')
    		]);
    
      return redirect()->route('login')->with('info2', 'Registro exitoso, espera que el coordinador de viajes active tu cuenta');
    	
    }

    public function login()
    {
    	return view('auth.login');
    }

    public function datosLogin(Request $request)
    {
    	$no_cuenta = $request->input('no_cuenta');
    	$password = $request->input('password');

    	if(!Auth::attempt(['no_cuenta' => $no_cuenta, 'password' => $password, 'activo' => 1]))
    	{
    		return redirect()->back()->with('info', 'Datos Incorrectos o tu cuenta no ha sido activada');
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


























