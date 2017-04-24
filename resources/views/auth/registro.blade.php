@extends('modulos.plantilla')

@section('title', 'Registro')

@section('contenido')

<h1>Registro</h1>

<div class="col-md-4">
	<form action="{{ route('datosRegistro') }}" method="POST">

	{!! csrf_field() !!}
			
		<div class="form-group">
			<label for="nom_completo">Nombre Completo</label>
			<input type="text" name="nom_completo" class="form-control">
		</div>

		<div class="form-group">
			<label for="no_cuenta">Número de Cuenta</label>
			<input type="text" name="no_cuenta" class="form-control">
		</div>

		<div class="form-group">
			<label for="email">Correo Electrónico</label>
			<input type="email" name="email" class="form-control">
		</div>

		<div class="form-group">
			<label for="password">Contraseña</label>
			<input type="password" name="password" class="form-control">
		</div>

		<div class="radio">
			<label>
			<input type="radio" name="rol[]" id="rol" value="1">
			Director
			</label>
		</div>

		<div class="radio">
			<label>
			<input type="radio" name="rol[]" id="rol" value="2">
			Coordinador de Vinculación
			</label>
		</div>

		<div class="radio">
			<label>
			<input type="radio" name="rol[]" id="rol" value="3">
			Docente
			</label>
		</div>
    
    <button type="submit" class="btn btn-primary">Registrar</button>

	</form>
</div>


@endsection


















