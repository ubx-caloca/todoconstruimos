@extends('administracion.layouts.index')
@section('contenido')

<div class="container">
<div class="panel panel-default">

  <div class="panel-heading">
    <h3 class="panel-title">AGREGAR NUEVA CATEGORÍA DE CLASIFICADO</h3>
  </div>
	@if ($errors->has())
<div style="background: rgba(242,222, 223,255); margin: 5px;padding-left: 10px; padding-right: 10px;border: 2px #dd9d9d solid;

background-color: #F2DEDF;
-webkit-border-radius: 8px;
-moz-border-radius: 8px;
border-radius: 8px;

color: #a71b2a;
">
<p><strong>Errores:</strong> </p>
	<ul>		
			@foreach ($errors->all() as $error)
				<li>
				{{ $error }} 
				</li>

			@endforeach
	</ul>
</div>		
	@endif
	
  <div class="panel-body">
  	{{ Form::open(array('url' => 'administracion/clasificadoscategorias')) }}
		<div class="form-group">
		<div class="form-group">
				{{ Form::label('categoria', 'Categoría') }}
				{{ Form::text('categoria',Input::old('categoria'), array( 'placeholder' => '',  'class' => 'form-control')) }}
				<br>
				{{ Form::label('descripcion', 'Descripción') }}
				{{ Form::text('descripcion', Input::old('descripcion'), array( 'placeholder' => '',  'class' => 'form-control')) }}

		</div>
		</div>
		<div class="form-group">
				<center>{{ Form::submit('Guardar categoría', array('class' => 'btn btn-success')) }}</center>
		</div>
		
  	{{ Form::close() }}

<?php $numero=1; ?>
<br>
<hr>
<center><h3>CATEGORÍAS DE CLASIFICADOS</h3></center>
<hr>
@foreach ($listaDeCategorias as $categoria)
		    	<div class="row">
		    		<div class="col-md-1">
		        		<center><?php echo "$numero"; $numero++;?></center>
		        	</div>
		    		<div class="col-md-7">
		    			{{ $categoria->categoria }}
		        	</div>
					<div class="col-md-1">
						<strong><a href="{{ URL::to('administracion/clasificadoscategorias/' . $categoria->id . '/edit') }}">Editar</a></strong>
		        	</div>
					<div class="col-md-1">
						{{ Form::open(array('url' => '/administracion/clasificadoscategorias/' . $categoria->id)) }}
					{{ Form::hidden('_method', 'DELETE') }}
					<strong><a href="#" onclick="$(this).closest('form').submit()">Eliminar</a></strong>
					{{ Form::close() }}
					
		        	</div>
		        </div>
		        <hr>
@endforeach

