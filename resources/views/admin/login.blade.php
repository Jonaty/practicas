@extends('admin.modulos.plantilla')

@section('title', 'Login Admin')

@section('contenido')

@if (Session::has('info'))
  <div class="alert alert-danger">
    {{ Session::get('info') }}
  </div>
@endif

<div class="row-fluid">&nbsp;</div>
<div class="row-fluid">&nbsp;</div>
<div class="container text-center bg-lightgray" style="width:80%;">

	<div class="row">&nbsp;</div>
    <div class="panel panel-info">
        <div class="panel-heading text-center" id="panel-log">
        <h3 class="text-warning">Login Admin	</h3>
        	<big><big>Ingresa tus datos de acceso</big></big>
        </div>
        <div class="panel-body text-center">
        	<form method="post" action="{{ route('datosLoginAdmin') }}">

        	{!! csrf_field() !!}
            	<div class="input-group input-group-lg">
                  <span class="input-group-addon">
                    <span class="glyphicon glyphicon-user"></span> Usuario&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  </span>
                  <input type="text" name="no_cuenta" class="form-control" placeholder="Usuario">
                </div> 
                
                <div class="row">&nbsp;</div>
                
                <div class="input-group input-group-lg">
                  <span class="input-group-addon">
                    <span class="glyphicon glyphicon-exclamation-sign"></span> Contraseña
                  </span>
                  <input type="password" name="password" class="form-control" placeholder="Contraseña">
                </div>
                
                <div class="row">&nbsp;</div>
                
                <div class="row">                
                    <div class="col-xs-8">&nbsp;</div>
                    <div class="text-right col-xs-4">
                        <button type="submit" class="btn btn-lg btn-success"><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Iniciar Sesión</button>
                        <div class="progress progress-striped active" style="display:none;">
                          <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                            <span class="sr-only">100% Complete</span>
                          </div>
                        </div>
                    </div>                
                </div> 
            </form>

            <p><a href="{{ route('login') }}">Atrás</a></p>
        </div>
    </div>
    	
    </div>

@endsection