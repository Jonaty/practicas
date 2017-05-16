<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use DB;

use App\User;

class AdminController extends Controller
{
	function __construct()
	{
		return $this->middleware('auth', ['except' => ['loginAdmin', 'datosLoginAdmin']]);
	}

    public function loginAdmin()
    {
    	return view('admin.login');
    }

    public function datosLoginAdmin(Request $request)
    {
    	$no_cuenta = $request->input('no_cuenta');
    	$password = $request->input('password');

    	if (!Auth::attempt(['no_cuenta' => $no_cuenta, 'password' => $password, 'rol' => 0, 'activo' => 1])) 
    	{
    		return redirect()->route('loginAdmin')->with('info', 'Datos Incorrectos!');
    	}
    	else
    	{
    		return redirect()->route('homeAdmin')->with('info', 'Bienvendo administrador!');
    	}
    }

    public function homeAdmin()
    {
    	return view('admin.home');
    }

    public function salir()
    {
    	Auth::logout();

    	return redirect()->route('loginAdmin');
    }

    public function altaUsuarios()
    {
        $usuarios = User::where('id', '!=', Auth::user()->id)->where('rol', '!=', 0)->where('activo', '=', 0)->get();
        return view('admin.paginas.altaUsuarios', compact('usuarios'));
    }

    public function datosAltaUsuarios(Request $request, $id)
    {
        $activo = $request->input('activo');

        DB::table('users')->where('id', $id)->update(['activo' => $activo]);

        return redirect()->route('altaUsuarios')->with('info', 'Usuario aceptado');
    }



}
