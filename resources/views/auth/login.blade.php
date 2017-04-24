@extends('modulos.plantilla')

@section('title', 'Login')

@section('contenido')

@if (Session::has('info'))
	<div class="alert alert-danger">
		{{ Session::get('info') }}
	</div>
@endif

<div class="col-md-4">
	<h1>Login</h1>

	<form action="{{ route('datosLogin') }}" method="POST">
		{!! csrf_field() !!}

		<div class="form-group">
			<label for="no_cuenta">Numero de Trabajor</label>
			<input type="text" name="no_cuenta" class="form-control">
		</div>

		<div class="form-group">
			<label for="password">Contraseña</label>
			<input type="password" name="password" class="form-control">
		</div>

		<button type="submit" class="btn btn-primary">Entrar</button>
	</form>
</div>

@endsection