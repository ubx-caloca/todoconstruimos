<!DOCTYPE HTML>
<html>





<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale = 1.0, user-scalable=0">
<title>Todo Construimos</title>
<link rel="shortcut icon" href="{{ asset('images/favicon2.ico') }}">
<link href="/index/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!--<link href="/index/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<script src="/index/js/bootstrap.min.js"></script>-->
<link href="/index/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="/index/js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="/index/css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</script>

<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,500,700,900' rel='stylesheet' type='text/css'>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<script src="/index/js/owl.carousel.2.0.0-beta.2.4/owl.carousel.js"></script>
<link rel="stylesheet" type="text/css" href="/index/js/owl.carousel.2.0.0-beta.2.4/assets/owl.carousel.css">
<script src="/index/js/easing.js"></script>
	<script type="text/javascript" 	src="/index/js/jquery.smint.js"></script>
		<script type="text/javascript">
			$(document).ready( function() {
			    $('.subMenu').smint({
			    	'scrollSpeed' : 1000,
			    });

				$('.owl-carousel').owlCarousel({
					loop:true,
					margin:10,
					responsiveClass:true,
					responsive:{
						0:{
							items:1,
							nav:false
						},
						600:{
							items:3,
							nav:false
						},
						1000:{
							items:6,
							nav:false,
							loop:true,
							
						}
					},
							loop:true,
							autoplay:true,
						    autoplayTimeout:2500,
						    autoplayHoverPause:true					
				});	
				$('.owl-carousel-clasificados').owlCarousel({
					loop:true,
					margin:10,
					responsiveClass:true,
					responsive:{
						0:{
							items:1,
							nav:false
						},
						600:{
							items:2,
							nav:false
						},
						1000:{
							items:3,
							nav:false,
							loop:true,
							
						}
					},
							loop:true,
							autoplay:true,
						    autoplayTimeout:2000,
						    autoplayHoverPause:true,
							mouseDrag:true,
							touchDrag:true,
							nav:true,
							dots:true			
				});
				$('.owl-carousel-eventos').owlCarousel({
					loop:true,
					margin:30,
					responsiveClass:true,
					responsive:{
						0:{
							items:1,
							nav:false
						},
						600:{
							items:2,
							nav:false
						},
						1000:{
							items:2,
							nav:false,
							loop:true,
							
						}
					},
							loop:true,
							autoplay:true,
						    autoplayTimeout:4000,
						    autoplayHoverPause:true,
							mouseDrag:true,
							touchDrag:true,
							nav:true,
							dots:true			
				});				
				
			});
			
			
			
			
			
			
		</script>
		<style>
		@import url(http://fonts.googleapis.com/css?family=Titan+One);
@import url(http://weloveiconfonts.com/api/?family=fontawesome);
@import url(http://meyerweb.com/eric/tools/css/reset/reset.css);
		[class*="fontawesome-"]:before {
  font-family: 'FontAwesome', sans-serif;
}

input {
	font-size: 1em;
	line-height: 1.5em;
	margin: 0;
	padding: 0;
	-webkit-appearance: none;
}

.Registro {
	margin: 50px auto;
	width: 242px;
}

.Registro span {
	color: hsl(5, 50%, 57%);
	display: block;
	height: 48px;
	line-height: 48px;
	position: absolute;
	text-align: center;
	width: 36px;
}

.Registro input {
	border: none;
	height: 48px;
	outline: none;
}

.Registro input[type="text"] {
	background-color: #fff;
	border-top: 2px solid #2c90c6;
	border-right: 1px solid #000;
	border-left: 1px solid #000;
	border-radius: 5px 5px 0 0;
	-moz-border-radius: 5px 5px 0 0;
	-webkit-border-radius: 5px 5px 0 0;
  -o-border-radius: 5px 5px 0 0;
  -ms-border-radius: 5px 5px 0 0;
	color: #363636;
	padding-left: 36px;
	width: 204px;
}

.Registro input[type="password"] {
	background-color: #fff;
	border-top: 2px solid #2c90c6;
	border-right: 1px solid #000;
	border-bottom: 2px solid #2c90c6;
	border-left: 1px solid #000;
	border-radius: 0 0 5px 5px;
	-moz-border-radius: 0 0 5px 5px;
	-webkit-border-radius: 0 0 5px 5px;
  -o-border-radius: 0 0 5px 5px;
  -ms-border-radius: 0 0 5px 5px;
	color: #363636;
	margin-bottom: 20px;
	padding-left: 36px;
	width: 204px;
}

.Registro input[type="submit"] {
	background-color: #2c90c6;
	border: 1px solid #2c90c6;
	border-radius: 15px;
	-moz-border-radius: 15px;
	-webkit-border-radius: 15px;
  -ms-border-radius: 15px;
  -o-border-radius: 15px;
	color: #fff;
	font-weight: bold;
	line-height: 48px;
	text-align: center;
	text-transform: uppercase;
	width: 240px;
}

.Registro input[type="submit"]:hover {
	background-color: #2c70c6;
  box-shadow: 2px 2px 20px  #2c90c6, #fff 0 -1px 2px;
}

.texto {
  color: #2c90c6; 
  font-size: 40px; 
  margin: 2% auto;
  text-align: center;
  font-family: 'Titan One';   
  text-shadow: 1px 2px 1px  rgba(0,0,0,.5);
  padding-top: 40px;
}

p:hover {
  text-shadow: 2px 2px 20px  #2c90c6, #fff 0 -1px 2px;
}



.dropdown {
    background:#fff;
    border:1px solid #ccc;
    border-radius:4px;
    width:300px;    
}
.dropdown-menu>li>a {
    color:#000000;
}
.dropdown ul.dropdown-menu {
    border-radius:4px;
    box-shadow:none;
    margin-top:20px;
    width:300px;
}

.formlabel {
    color: whitesmoke;
	font-size: large;
}
.formbutton{
	font-size: larger;
	background-color: #e09f00;
	border-color: #e09f00;
	font-weight: 600;
}
.formbutton:hover{
	background-color: #fcb200;
	border-color: #fcb200;	
}

.formControlPassword{

display: block;
width: 100%;
height: 34px;
padding: 6px 12px;
font-size: 14px;
line-height: 1.42857143;
color: #555;
background-color: #fff;
background-image: none;
border: 1px solid #ccc;
border-radius: 4px;
-webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
-webkit-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
}

.fileuploadbutton{
margin-top: 5px;
}

.socialtop{
	float: left;
	margin-top: 5px;
	margin-left: 10px;
	position: absolute;
}

.socialtop ul li:first-child, ol li:first-child {
margin-top: 0px;
margin-left: 0;
}
.socialtop li {
background: none;
display: inline-block;
}


		</style>
</head>






<body>







	<!-- ENCABEZADO -->
	<div class="header sTop hidden-xs" style="height: 220px;">
			<div class="socialtop">	
		      <ul>	
			   <li class="facebook"><a href="http://www.facebook.com/todoconstruimos" target="_blank"><span> </span></a></li>
			   <li class="twitter"><a href="#" target="_blank"><span> </span></a></li>
			   <li class="google"><a href="#" target="_blank"><span> </span></a></li>			
		     </ul>
			</div>

		<div class="logo">
			<a href="/"><img src="/index/images/logoTodoConstruimos.png" alt=""/></a>
		</div>    
        
	</div> 
     <div class="blogescrito" style="padding: 1em 0;" >
<div class="container">
<div class="panel panel-default" style="background-color: initial;border-width: 0px;">

  <div class="panel-heading">
   <center> <h3 class="panel-title" style="font-size: 24px;font-weight: bold;">REGISTRO DE NUEVO USUARIO</h3></center>
  </div>



  <div class="panel-body" style="background: url(./index/images/contact.png);padding-top:3em;padding-left:4em;padding-right:4em;border-bottom-left-radius: 5px;
border-bottom-right-radius: 5px;">
  
    <div class="row">
	<div class="col-md-1"></div>
	<div class="col-md-10">
  
	@if ($errors->has())
<div style="background: rgba(242,222, 223,255); margin: 5px;padding-left: 10px; padding-right: 10px;border: 2px #dd9d9d solid;

background-color: #F2DEDF;
-webkit-border-radius: 8px;
-moz-border-radius: 8px;
border-radius: 8px;
color: #a71b2a;padding-top: 10px;padding-bottom: 10px;margin-bottom: 30px;
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
  
  	{{ Form::open(array('url' => 'signup', 'files' => true)) }}
	<!--
	<div class="form-group">
	<span class="fontawesome-user"></span><input type="text" required placeholder="Nombre de usuario" autocomplete="off"> 
	</div>
	<div class="form-group">
<span class="fontawesome-envelope-alt"></span><input type="text" id="email" required placeholder="Correo" autocomplete="off">
	</div>
		<div class="form-group">
<span class="fontawesome-lock"></span><input type="password" name="password" id="password" required placeholder="Contraseña" autocomplete="off"> 
<div>
<div class="form-group">
			<center>{{ Form::submit('Registra tu cuenta', array('class' => 'btn btn-success')) }}</center>
</div>
-->
	
		<div class="form-group">
				{{ Form::label('user_email', 'Usuario (Email)', array('class'=> 'formlabel')) }}
				{{ Form::text('user_email', Input::old('user_email'), array( 'placeholder' => '',  'class' => 'form-control')) }}
		</div>
		<div class="form-group">
				{{ Form::label('user_password', 'Contraseña' , array('class'=> 'formlabel')) }}
				{{ Form::password('user_password', array( 'placeholder' => '',  'class' => 'form-control')) }}
		</div>
		<div class="form-group">
				{{ Form::label('user_password_confirmation', 'Repetir contraseña', array('class'=> 'formlabel')) }}
				{{ Form::password('user_password_confirmation', array( 'placeholder' => '',  'class' => 'form-control')) }}
		</div>
		<div class="form-group">
				{{ Form::label('user_nombre', 'Nombre', array('class'=> 'formlabel')) }}
				{{ Form::text('user_nombre', Input::old('user_nombre'), array( 'placeholder' => '',  'class' => 'form-control')) }}
		</div>
		<div class="form-group">
				{{ Form::label('user_telefono', 'Teléfono de casa', array('class'=> 'formlabel')) }}
				{{ Form::text('user_telefono', Input::old('user_telefono'), array( 'placeholder' => '',  'class' => 'form-control')) }}
		</div>
		<div class="form-group">
				{{ Form::label('user_celular', 'Celular', array('class'=> 'formlabel')) }}
				{{ Form::text('user_celular', Input::old('user_celular'), array( 'placeholder' => '',  'class' => 'form-control')) }}
		</div>
				<div class="form-group">
				{{ Form::label('user_nextel', 'Nextel', array('class'=> 'formlabel')) }}
				{{ Form::text('user_nextel', Input::old('user_nextel'), array( 'placeholder' => '',  'class' => 'form-control')) }}
		</div>
		<div class="form-group">
				{{ Form::label('user_imagen', 'Imagen', array('class'=> 'formlabel')) }}
				{{ Form::file('user_imagen',['class'=>'formlabel fileuploadbutton'])}}
		</div>
		<hr>
		<div class="form-group">
				<center>{{ Form::submit('Registrar', array('class' => 'btn btn-success formbutton')) }}</center>
		</div>
		
  	{{ Form::close() }}
  </div>
</div>

</div>
<div class="col-md-1"></div>

</div>
</div>
   	</div> 
    
    
    
    
    <!-- ************* -->
   	<div class="footer">
   		@include('index.include_footer')
   	</div>
    <!-- ************* -->
    
    
    
 <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-56776636-1', 'auto');
  ga('send', 'pageview');

</script>   
    
   	<script src="/index/js/bootstrap.min.js"></script>
</body>
</html>

