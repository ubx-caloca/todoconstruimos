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
				{{ Form::label('proveedor_tipo_idproveedor_tipo', 'Tipo de proveedor') }}
				{{ Form::select('proveedor_tipo_idproveedor_tipo', $listaTiposDeProveedores , Input::old('proveedor_tipo_idproveedor_tipo'), array( 'placeholder' => '',  'class' => 'form-control')) }}
		</div>
		<div class="form-group">
				{{ Form::label('nombre_usuario', 'Nombre de usuario') }}
				{{ Form::text('nombre_usuario','', array( 'placeholder' => '',  'class' => 'form-control')) }}
		</div>
		<div class="form-group">
				{{ Form::label('nombre', 'Nombre') }}
				{{ Form::text('nombre','', array( 'placeholder' => '',  'class' => 'form-control')) }}
		</div>
		<div class="form-group">
				{{ Form::label('direccion', 'Dirección') }}
				{{ Form::text('direccion','', array( 'placeholder' => '',  'class' => 'form-control')) }}
		</div>
		<div class="form-group">
				{{ Form::label('telefono', 'Telefono') }}
				{{ Form::text('telefono','', array( 'placeholder' => '',  'class' => 'form-control')) }}
		</div>
		<div class="form-group">
				{{ Form::label('facebook', 'Página de Facebook') }}
				{{ Form::text('facebook','', array( 'placeholder' => '',  'class' => 'form-control')) }}
		</div>
		<div class="form-group">
				{{ Form::label('twitter', 'Página de Twitter') }}
				{{ Form::text('twitter','', array( 'placeholder' => '',  'class' => 'form-control')) }}
		</div>
		<div class="form-group">
				{{ Form::label('otro_sns', 'Otra red social') }}
				{{ Form::text('otro_sns','', array( 'placeholder' => '',  'class' => 'form-control')) }}
		</div>
		<hr>
		<center><h4>Coordenadas de la ubicación geográfica</h4></center>
		<hr>
		<div class="form-group">
				{{ Form::label('longitud', 'Longitud') }}
				{{ Form::text('longitud','', array( 'placeholder' => '',  'class' => 'form-control')) }}
		</div>
		<div class="form-group">
				{{ Form::label('latitud', 'Latitud') }}
				{{ Form::text('latitud','', array( 'placeholder' => '',  'class' => 'form-control')) }}
		</div>
		<hr>
		<center><h4>Detalles del proveedor</h4></center>
		<hr>
		<div class="form-group">
				{{ Form::label('introduccion', 'Introducción') }}
				{{ Form::text('introduccion','', array( 'placeholder' => '',  'class' => 'form-control')) }}
		</div>
		<div class="form-group">
				{{ Form::label('descripcion', 'Descripción') }}
				{{ Form::text('descripcion','', array( 'placeholder' => '',  'class' => 'form-control')) }}
		</div>
		<div class="form-group">
				{{ Form::label('vision', 'Visión') }}
				{{ Form::text('vision','', array( 'placeholder' => '',  'class' => 'form-control')) }}
		</div>
		<div class="form-group">
				{{ Form::label('productos', 'Productos') }}
				{{ Form::text('productos','', array( 'placeholder' => '',  'class' => 'form-control')) }}
		</div>
		<hr>
		<center><h4>Imagenes de fondo</h4></center>
		<hr>
		<div class="form-group">
				{{ Form::label('imagen_intro', 'Imagen de la sección de Introducción') }}
				{{ Form::file('imagen_intro[]',['multiple' => true]) }}
		</div>
		<div class="form-group">
				{{ Form::label('imagen_descripcion', 'Imagen de la sección de Descripción') }}
				{{ Form::file('imagen_descripcion[]',['multiple' => true]) }}
		</div>
		<div class="form-group">
				{{ Form::label('imagen_vision', 'Imagen de la sección de Visión') }}
				{{ Form::file('imagen_vision[]',['multiple' => true]) }}
		</div>
		<hr>
		<div class="form-group">
				<center>{{ Form::submit('Agregar proveedor', array('class' => 'btn btn-success')) }}</center>
		</div>
		
  	{{ Form::close() }}
  </div>
</div>
</div>	
		
		

@stop