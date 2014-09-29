@extends('administracion.layouts.index')
@section('contenido')

<?php
	$numeroAnuncios = 1;
?>

<div class="container">
<div class="panel panel-default">

  <div class="panel-heading">
    <h3 class="panel-title">LISTA DE ANUNCIOS</h3>
  </div>

  <div class="panel-body">
		<div class="container" style="width:auto">
		    <?php foreach ($listaDeAnuncios as $anuncio): ?>
		    	<div class="row">
		    		<div class="col-md-1">
		        		<center><?php echo "$numeroAnuncios"; $numeroAnuncios++;?></center>
		        	</div>
		    		<div class="col-md-11">
		        		<p><strong>Título de anuncio:</strong> {{ $anuncio->anuncio }}</p>
		        		<p><strong>Periodo:</strong> {{ $anuncio->periodo }}</p>
<?php
		$fecPubString = $anuncio->fecha;
		$utc_date = new DateTime(
                $fecPubString, 
                new DateTimeZone('UTC')
);

$tj_date = $utc_date;
$tj_date->setTimeZone(new DateTimeZone('America/Tijuana'));
?>						
						
						<p><strong>Fecha de publicación:</strong> {{ date_format($tj_date, 'd M Y H:i a') }}</p>
		        		<p><strong><a href="/administracion/anuncios/{{$anuncio->id}}/edit">Editar</a></strong></p>
						<p>
							{{ Form::open(array('url' => '/administracion/anuncios/' . $anuncio->id, 'class' => 'pull-left')) }}
					{{ Form::hidden('_method', 'DELETE') }}
					<strong><a href="#" onclick="$(this).closest('form').submit()">Eliminar</a></strong>
					{{ Form::close() }}
						</p>
		        	</div>
		        </div>
		        <hr>
		    <?php endforeach; ?>
		</div>

		<center><?php echo $listaDeAnuncios->links(); ?></center>
  </div>
</div>
</div>	
		
		

@stop