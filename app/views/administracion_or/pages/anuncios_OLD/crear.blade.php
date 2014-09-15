@extends('administracion.layouts.index')
@section('contenido')

<div class="container">
<div class="panel panel-default">

  <div class="panel-heading">
    <h3 class="panel-title">Agregar nuevo proveedor</h3>
  </div>

  <div class="panel-body">
  	{{ Form::open(array('url' => 'administracion/proveedores/guardarproveedor', 'files' => true)) }}
		<hr>
		<center><h4>Datos generales del proveedor</h4></center>
		<hr>
		<div class="form-group">
				{{ Form::label('anuncio', 'Anuncio') }}
				{{ Form::text('anuncio','', array( 'placeholder' => '',  'class' => 'form-control')) }}
		</div>
		<div class="form-group">
				{{ Form::label('periodo', 'Periodo') }}
				{{ Form::text('periodo','', array( 'placeholder' => '',  'class' => 'form-control')) }}
		</div>
		
  	{{ Form::close() }}
  </div>
</div>
</div>	
		
		

@stop