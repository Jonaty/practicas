@extends('admin.modulos.plantilla')

@section('title', 'Alta Usuarios')

@section('contenido')

@if (Session::has('info'))
	<div class="alert alert-success">
		{{ Session::get('info') }}
	</div>
@endif

<div class="col-md-10">
<h1>Alta Usuarios</h1>
	<table class="table table-responsive table-hover table-bordered">
		<thead>
			<tr>
				<th>Usuario</th>
				<th>Plantel</th>
				<th>Rol</th>
				<th>Acciones</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($usuarios as $usuario)
			<tr>
				<td>{{ $usuario->nom_completo }}</td>
				<td>{{ $usuario->plantel->nom_plantel }}</td>

				@if ($usuario->rol == 1)
					<td>Director</td>
				@endif

				<td>
					<form action="{{ route('datosAltaUsuarios', $usuario->id) }}" method="POST">
						{!! csrf_field() !!}
						{!! method_field('PUT') !!}

						<input type="hidden" name="activo" value="1">

						<button type="submit" class="btn btn-primary btn-sm">Aceptar  <span class="glyphicon glyphicon-ok"></span></button>
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>

@endsection