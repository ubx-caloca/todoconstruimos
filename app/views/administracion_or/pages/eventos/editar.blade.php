<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta charset="utf-8">

    <title>Administracion TODO CONSTRUIMOS</title>

    <!-- Bootstrap core CSS -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="/vendor/bootstrap-3.2.0-dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/vendor/bootstrap-3.2.0-dist/css/dashboard.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/vendor/bootstrap-3.2.0-dist/js/ie10-viewport-bug-workaround.js"></script>

<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>

<link rel="stylesheet" type="text/css" href="/vendor/blog/lib/css/bootstrap.min.css"></link>
<link rel="stylesheet" type="text/css" href="/vendor/blog/lib/css/prettify.css"></link>
<link rel="stylesheet" type="text/css" href="/vendor/blog/src/bootstrap-wysihtml5.css"></link>

<link rel="stylesheet" href="//code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css">

  <script>
  $(function() {
    $( "#fecha_evento" ).datepicker({ dateFormat: "yy-mm-dd" });
  });
  </script>

</head>
<body>
@include('administracion.includes.menu')




<div class="container">

		<div class="hero-unit" style="margin-top:40px">
			{{ Form::open(array('url' => 'administracion/eventos/guardarEdicion/'.$evento->id,'method'=>'put', 'files' => true)) }}
				<h2>Editar este evento</h2>
				<hr/>
				<div class="form-group">
						{{ Form::label('titulo', 'Título') }}
						{{ Form::text('titulo', $evento->titulo , array( 'placeholder' => '',  'class' => 'form-control')) }}
				</div>	
				<hr>
				<div class="form-group">
						{{ Form::label('fecha_evento', 'Fecha del evento') }}
						{{ Form::text('fecha_evento',$evento->fecha_evento, array( 'placeholder' => '',  'class' => 'form-control')) }}
				</div>	
				<hr>				
				<div class="form-group">
						{{ Form::label('imagen', 'Selecciona una imagen') }}
						{{ Form::file('imagen[]',['multiple' => true]) }}
				</div>					
				<hr>
				<textarea name="contenido" class="textarea" placeholder="Escribe el contenido" style="width: 810px; height: 200px">{{ $evento->contenido }}</textarea>
				<hr>
				<div class="form-group">
					<center>{{ Form::submit('Editar evento', array('class' => 'btn btn-success')) }}</center>
				</div>
			{{ Form::close() }}
		</div>
</div>



<script src="/vendor/blog/lib/js/wysihtml5-0.3.0.js"></script>
<script src="/vendor/blog/lib/js/prettify.js"></script>
<script src="/vendor/blog/lib/js/bootstrap.min.js"></script>
<script src="/vendor/blog/src/bootstrap-wysihtml5.js"></script>

<script>
	$('.textarea').wysihtml5({
	"font-styles": true, //Font styling, e.g. h1, h2, etc. Default true
	"emphasis": true, //Italics, bold, etc. Default true
	"lists": true, //(Un)ordered lists, e.g. Bullets, Numbers. Default true
	"html": false, //Button which allows you to edit the generated HTML. Default false
	"link": false, //Button to insert a link. Default true
	"image": false, //Button to insert an image. Default true,
	"color": false //Button to change color of font  
});
</script>

<script type="text/javascript" charset="utf-8">
	$(prettyPrint);
</script>

</body>
</html>
