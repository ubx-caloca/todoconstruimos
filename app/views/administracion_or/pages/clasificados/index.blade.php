@extends('administracion.layouts.index')
@section('contenido')

<?php
	$numeroClasificado = 1;
	setlocale(LC_ALL,"es_ES");
	$dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
	$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
?>

<div class="container">
<div class="panel panel-default">

  <div class="panel-heading">
    <h3 class="panel-title">LISTA DE CLASIFICADOS</h3>
  </div>

  <div class="panel-body">
		<div class="container" style="width:auto">
		    <?php foreach ($listaDeClasificados as $clasificado): ?>
		    	<div class="row">
		    		<div class="col-md-1">
		        		<center><?php echo "$numeroClasificado"; $numeroClasificado++;?></center>
		        	</div>
		    		<div class="col-md-11">
		        		<p><strong>Título:</strong> {{ $clasificado->titulo }}</p>
		        		<p><strong>Categoria:</strong> {{ $clasificado->categoria->categoria }}</p>
		        		<p><strong>Descripción:</strong><br> <textarea readonly style="width:100%">{{ $clasificado->descripcion }} </textarea></p
<?php
		$fecPubString = $clasificado->fecha_publicacion;
		$utc_date = new DateTime(
                $fecPubString, 
                new DateTimeZone('UTC')
);

$tj_date = $utc_date;
$tj_date->setTimeZone(new DateTimeZone('America/Tijuana'));
?>
						
						<p><strong>Fecha de publicación:</strong> {{ date_format($tj_date, 'd M Y H:i a') }}</p>
						<p><strong>Premium:</strong> {{ (($clasificado->premium>0)?'Si': 'No') }}</p>
						<p><strong>Habilitado:</strong> {{ (($clasificado->habilitar > 0)?'Si':'No') }}</p>
						<p><strong>Precio:</strong> {{ ''.$clasificado->precio.' '.$clasificado->moneda}}</p>
						<!--
		        		<p><strong><a href=" <?php echo"/administracion/clasificados/galeria/$clasificado->id"; ?> ">Agregar fotos a clasificado</a></strong></p>
						-->
						<p><strong>Imagenes:</strong></p>
						<div style="width:100%; background-color:#ffffff; border-top: 7px solid #ffffff; border-bottom: 7px solid #ffffff;">
						    <div >
						<!--
                            <div class="owl-carousel">
							-->
							 @foreach ($clasificado->imagenes as $img)		
                              <div> <img src="/images/clasificados/{{$img->nombre_imagen}}" alt=""  class="img-thumbnail" style="width: 150px;height: 100px;"/> </div>
							  @endforeach
                            </div>        
						</div> 
		        		<p><strong><a href=" <?php echo"/administracion/clasificados/$clasificado->id/edit"; ?> ">Editar</a></strong></p>
						<p>
							{{ Form::open(array('url' => '/administracion/clasificados/' . $clasificado->id, 'class' => 'pull-left')) }}
					{{ Form::hidden('_method', 'DELETE') }}
					<strong><a href="#" onclick="$(this).closest('form').submit()">Eliminar</a></strong>
					{{ Form::close() }}
						</p>
		        	</div>
		        </div>
		        <hr>
		    <?php endforeach; ?>
		</div>

		<center><?php echo $listaDeClasificados->links(); ?></center>
  </div>
</div>
</div>	
		
		

@stop