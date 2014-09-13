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


<link rel="stylesheet" type="text/css" href="/vendor/blog/lib/css/bootstrap.min.css"></link>
<link rel="stylesheet" type="text/css" href="/vendor/blog/lib/css/prettify.css"></link>
<link rel="stylesheet" type="text/css" href="/vendor/blog/src/bootstrap-wysihtml5.css"></link>

</head>
<body>
@include('administracion.includes.menu')




<div class="container">

		<div class="hero-unit" style="margin-top:40px">
			{{ Form::open(array('url' => 'administracion/blog/publicar', 'files' => true)) }}
				<h2>Nuevo post</h2>
				<hr/>
				<div class="form-group">
						{{ Form::label('titulo', 'Título') }}
						{{ Form::text('titulo','', array( 'placeholder' => '',  'class' => 'form-control')) }}
				</div>	
				<hr>
				<div class="form-group">
						{{ Form::label('imagen', 'Selecciona una imagen') }}
						{{ Form::file('imagen[]',['multiple' => true]) }}
				</div>					
				<hr>
				<textarea name="contenido" class="textarea" placeholder="Escribe el contenido" style="width: 810px; height: 200px"></textarea>
				<hr>
				<div class="form-group">
					<center>{{ Form::submit('Publicar post', array('class' => 'btn btn-success')) }}</center>
				</div>
			{{ Form::close() }}
		</div>
</div>



<hr>


   	  <div class="container">
   	  	<center><h1><img src="/index/images/Blog.png" alt="Eventos"></h1></center><br>
   	   


						@foreach ($Posts as $post)
							<div class="row text-center">
						   	    <div class="col-md-12 service_grid">
						   		  <p><img src="/images/blog/{{$post->imagen}} " alt="{{ $post->titulo }}" class="img-thumbnail"></p>
						   		  <h3 class="m_1">{{$post->titulo}}</h3>
						   		  <p class="m_2" style="text-align:justify;">{{ $post->contenido }}</p>
						          <p><br><a class="btn btn-default" href="<?php echo"/administracion/blog/editar/$post->id"; ?>" ><span>Editar</span></a> | <a class="btn btn-default" href="<?php echo"/administracion/blog/borrar/$post->id"; ?>" ><span>Borrar</span></a><br>___________________<br><br></p>
						   		</div>
						   	</div>
								
						@endforeach

						<center><?php echo $Posts->links(); ?></center>

   	  </div>
   	  </div>



<script src="/vendor/blog/lib/js/wysihtml5-0.3.0.js"></script>
<script src="/vendor/blog/lib/js/jquery-1.7.2.min.js"></script>
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
