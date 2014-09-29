@extends('administracion.layouts.index')
@section('contenido')

<div class="container">
<div class="panel panel-default">

  <div class="panel-heading">
    <h3 class="panel-title">AGREGAR GALERÍA DE FOTOS AL PROVEEDOR ({{ $nombreDeUsuario }} - {{ $idproveedor }})</h3>
  </div>

  <div class="panel-body">
  	{{ Form::open(array('url' => 'administracion/proveedores/galeria', 'files' => true)) }}
		<center><h4>Imagenes</h4></center>
		<hr>
		<div class="form-group">
				{{ Form::label('galeria', 'Selecciona las imagenes a subir') }}
				{{ Form::file('galeria[]',['multiple' => true]) }}
				{{ Form::hidden('idproveedor', $idproveedor) }}
				{{ Form::hidden('nombreDeUsuario', $nombreDeUsuario) }}
		</div>
		<hr>
		<div class="form-group">
				<center>{{ Form::submit('Agregar proveedor', array('class' => 'btn btn-success')) }}</center>
		</div>

  	{{ Form::close() }}
  </div>

<?php
		$galeria = DB::table('proveedor_galeria')->where('proveedores_idproveedor', '=', $idproveedor)->get();
		 $numero=1;

?>
<hr>
@foreach ($galeria as $foto)
		    	<div class="row">
		    		<div class="col-md-1">
		        		<center><?php echo "$numero"; $numero++;?></center>
		        	</div>
		    		<div class="col-md-10">
		    			<center><?php echo "<img src=\"/images/proveedores/$nombreDeUsuario/galeria/".$foto->imagen." \" alt=\"foto\" class=\"img-thumbnail\">";?></center>
		        	</div>
		        </div>
		        <hr>
@endforeach



</div>
</div>	
		
		

@stop