@extends('administracion.layouts.index')
@section('contenido')

<div class="container">
<div class="panel panel-default">

  <div class="panel-heading">
    <h3 class="panel-title">AGREGAR NUEVO CLASIFICADO</h3>
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
  	{{ Form::open(array('url' => 'administracion/clasificados', 'files' => true)) }}
		<hr>
		<center><h4>Datos generales del clasificado</h4></center>
		<hr>
		<div class="form-group">
				{{ Form::label('categoria_id', 'Categoria de clasificado') }}
				{{ Form::select('categoria_id', $listaCategoriasClasificados , Input::old('categoria_id'), array( 'placeholder' => '',  'class' => 'form-control')) }}
		</div>
		<div class="form-group">
				{{ Form::label('clasf_titulo', 'Título de clasificado') }}
				{{ Form::text('clasf_titulo', Input::old('clasf_titulo'), array( 'placeholder' => '',  'class' => 'form-control')) }}
		</div>
		<div class="form-group">
				{{ Form::label('clasf_descripcion', 'Descripción de clasificado') }}
				{{ Form::textarea('clasf_descripcion', Input::old('clasf_descripcion'), array( 'placeholder' => '',  'class' => 'form-control')) }}
		</div>
		<hr>
		<center><h4>Detalles del clasificado</h4></center>
		<hr>
		<div class="form-group">
				{{ Form::label('clasf_premium', 'Premium') }}
				{{ Form::select('clasf_premium',array('1' => 'Si', '0' => 'No') , Input::old('clasf_premium'), array( 'placeholder' => '',  'class' => 'form-control')) }}
		</div>
		<div class="form-group">
				{{ Form::label('clasf_precio', 'Precio') }}
				{{ Form::text('clasf_precio', Input::old('clasf_precio'), array( 'placeholder' => '',  'class' => 'form-control')) }}
		</div>
		<div class="form-group">
				{{ Form::label('clasf_moneda', 'Moneda') }}
				{{ Form::text('clasf_moneda', Input::old('clasf_moneda'), array( 'placeholder' => '',  'class' => 'form-control')) }}
		</div>
		<div class="form-group">
				{{ Form::label('clasf_habilitar', 'Habilitar') }}
				{{ Form::select('clasf_habilitar', array('1' => 'Si', '0' => 'No') , Input::old('clasf_habilitar'), array( 'placeholder' => '',  'class' => 'form-control')) }}
		</div>
		<hr>
		<center><h4>Imagenes del clasificado</h4></center>
		<hr>
		<div class="form-group">
				{{ Form::label('imagenes', 'Imagenes') }}
				{{ Form::file('imagenes[]',['multiple' => true]) }}
		</div>
		<hr>
		<div class="form-group">
				<center>{{ Form::submit('Agregar clasificado', array('class' => 'btn btn-success')) }}</center>
		</div>
		
  	{{ Form::close() }}
  </div>
</div>
</div>	
		
		

@stop