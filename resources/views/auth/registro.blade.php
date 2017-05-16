@extends('modulos.plantilla')

@section('title', 'Registro')

@section('contenido')

<div class="row-fluid">&nbsp;</div>
<div class="row-fluid">&nbsp;</div>
<div class="container text-center bg-lightgray" style="width:80%;">

	<div class="row">&nbsp;</div>
    <div class="panel panel-info">
        <div class="panel-heading text-center" id="panel-log">
        	<big><big>Ingresa tus datos de acceso</big></big>
        </div>
        <div class="panel-body text-center">
        	<form method="post" action="{{ route('datosRegistro') }}">

        	{!! csrf_field() !!}

            	<div class="input-group input-group-lg">
                  <span class="input-group-addon">
                    <span class="glyphicon glyphicon-user"></span> Nombre&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  </span>
                  <input type="text" name="nom_completo" class="form-control" placeholder="Nombre Completo">
                </div> 
                
                <div class="row">&nbsp;</div>

                <div class="input-group input-group-lg">
                  <span class="input-group-addon">
                    <span class="glyphicon glyphicon-asterisk"></span> No. Cuenta&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  </span>
                  <input type="text" name="no_cuenta" class="form-control" placeholder="No. Cuenta">
                </div> 
                

                <div class="row">&nbsp;</div>

                <div class="input-group input-group-lg">
                  <span class="input-group-addon">
                    <span class="glyphicon glyphicon-envelope"></span> Correo&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  </span>
                  <input type="text" name="email" class="form-control" placeholder="Correo Universitario">
                </div> 

                <div class="row">&nbsp;</div>
                
                <div class="input-group input-group-lg">
                  <span class="input-group-addon">
                    <span class="glyphicon glyphicon-exclamation-sign"></span> Contraseña
                  </span>
                  <input type="password" name="password" class="form-control" placeholder="Contraseña">
                </div>

                 <div class="row">&nbsp;</div>
                
                <span class="input-group-addon">
                                 <div class="form-group">
                 	<div class="input-group input-group-lg">
                 	<div class="radio">
                 		<label>
                 			<input type="radio" name="rol" id="rol" value="1">
                 			Director
                 		</label>
                 	</div>

                 	<div class="radio">
                 		<label>
                 			<input type="radio" name="rol" id="rol" value="2">
                 			Coordinador de Vinculación
                 		</label>
                 	</div>

                 	<div class="radio">
                 		<label>
                 			<input type="radio" name="rol" id="rol" value="3">
                 			Docente
                 		</label>
                 	</div>
                </div>
                
                 </div>
               </span>

               <div class="row">&nbsp;</div>

               <div class="input-group input-group-lg">
               <div class="form-group">
               	<label for="plantel">Plantel</label>
               	<select name="plantel_id" id="plantel" class="form-control">
               		@foreach ($planteles as $plantel)
               			<option value="{{ $plantel->id }}">{{ $plantel->nom_plantel }}</option>
               		@endforeach
               	</select>
               </div>
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

            <p>Eres Admin? <a href="{{ route('loginAdmin') }}">Entra aquí</a></p>
        </div>
    </div>
    	
    </div>

{{-- <h1>Registro</h1>

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
 --}}

@endsection


















