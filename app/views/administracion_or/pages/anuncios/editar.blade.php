@extends('administracion.layouts.index')
@section('contenido')

<div class="container">
<div class="panel panel-default">

  <div class="panel-heading">
    <h3 class="panel-title">EDITAR ANUNCIO</h3>
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
 {{ Form::model($anuncio, array('route' => array('administracion.anuncios.update', $anuncio->id), 'method' => 'PUT',  'files'=> true)) }}
		<hr>
		<center><h4>Datos del anuncio</h4></center>
		<hr>
		<div class="form-group">
				{{ Form::label('titulo', 'Título del anuncio') }}
				@if ($errors->has())
					{{ Form::text('titulo',  Input::old('titulo'), array( 'placeholder' => '',  'class' => 'form-control')) }}
				@else
					{{ Form::text('titulo', $anuncio->anuncio, array( 'placeholder' => '',  'class' => 'form-control')) }}
				@endif
		</div>
		<div class="form-group">
				{{ Form::label('periodo', 'Periodo') }}
				@if ($errors->has())
					{{ Form::text('periodo',  Input::old('periodo'), array( 'placeholder' => '',  'class' => 'form-control')) }}
				@else
					{{ Form::text('periodo', $anuncio->periodo, array( 'placeholder' => '',  'class' => 'form-control')) }}
				@endif
		</div>
		<hr>
		<div class="form-group">
				<center>{{ Form::submit('Guardar anuncio', array('class' => 'btn btn-success')) }}</center>
		</div>
		
  	{{ Form::close() }}
  </div>
</div>
</div>	
		
		

@stop