@extends('administracion.layouts.index')
@section('contenido')

<div class="container">
<div class="panel panel-default">

  <div class="panel-heading">
    <h3 class="panel-title">AGREGAR NUEVA CATEGORÍA DE PROVEEDORES</h3>
  </div>

  <div class="panel-body">
  	{{ Form::open(array('url' => 'administracion/proveedores/categorias/agregar')) }}
		<center><h4>Imagenes</h4></center>
		<hr>
		<div class="form-group">
		<div class="form-group">
				{{ Form::label('tipo', 'Categoría') }}
				{{ Form::text('tipo','', array( 'placeholder' => '',  'class' => 'form-control')) }}
				<br>
				<hr>
					<p>Puedes elegir el icono en esta página <a href="http://fortawesome.github.io/Font-Awesome/" target="_blank"> http://fortawesome.github.io/Font-Awesome/ </a> </p>
				<hr>
				{{ Form::label('icono', 'Icono') }}
				{{ Form::text('icono','', array( 'placeholder' => '',  'class' => 'form-control')) }}

		</div>
		</div>
		<hr>
		<div class="form-group">
				<center>{{ Form::submit('Agregar categoría', array('class' => 'btn btn-success')) }}</center>
		</div>
		
  	{{ Form::close() }}

<?php $numero=1; ?>
<hr>
<center><h3>CATEGORÍAS DE PROVEEDORES</h3></center>
<hr>
@foreach ($categorias as $categoria)
		    	<div class="row">
		    		<div class="col-md-1">
		        		<center><?php echo "$numero"; $numero++;?></center>
		        	</div>
		        	<div class="col-md-1">
		        		<center><?php echo "<i style='font-size:50px;' class=\"fa ".$categoria->icono." \"></i>"; ?></center>
		        	</div>
		    		<div class="col-md-10">
		    			<p>{{ $categoria->tipo }}</p>
		        	</div>
		        </div>
		        <hr>
@endforeach



  </div>
</div>
</div>	
		
		

@stop