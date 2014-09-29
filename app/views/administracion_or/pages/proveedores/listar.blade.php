@extends('administracion.layouts.index')
@section('contenido')

<?php
	$numeroProveedor = 1;
?>

<div class="container">
<div class="panel panel-default">

  <div class="panel-heading">
    <h3 class="panel-title">LISTA DE PROVEEDORES</h3>
  </div>

  <div class="panel-body">
		<div class="container">
		    <?php foreach ($listaDeProveedores as $proveedor): ?>
		    	<div class="row">
		    		<div class="col-md-1">
		        		<center><?php echo "$numeroProveedor"; $numeroProveedor++;?></center>
		        	</div>
		    		<div class="col-md-11">
		        		<?php echo "$proveedor->nombre"; ?><br>
		        		<p><strong>Nombre de usuario:</strong> {{ $proveedor->nombre_usuario }}</p>
		        		<p><strong>Dirección:</strong> {{ $proveedor->direccion }}</p>
		        		<p><strong>Teléfono:</strong> {{ $proveedor->telefono }}</p>
		        		<p><strong><a href=" <?php echo"/administracion/proveedores/galeria/$proveedor->nombre_usuario/$proveedor->id"; ?> ">Agregar fotos a galería</a></p>
		        		<p><strong><a href=" <?php echo"/administracion/proveedores/editar/$proveedor->id"; ?> ">Editar</a></p>
		        	</div>
		        </div>
		        <hr>
		    <?php endforeach; ?>
		</div>

		<center><?php echo $listaDeProveedores->links(); ?></center>
  </div>
</div>
</div>	
		
		

@stop