
<!DOCTYPE HTML>
<!--
	Big Picture by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>{{ $proveedores->nombre }}</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="/proveedores/js/jquery.min.js"></script>
		<script src="/proveedores/js/jquery.poptrox.min.js"></script>
		<script src="/proveedores/js/jquery.scrolly.min.js"></script>
		<script src="/proveedores/js/jquery.scrollgress.min.js"></script>
		<script src="/proveedores/js/skel.min.js"></script>
		<script src="/proveedores/js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="/proveedores/css/skel.css" />
			<link rel="stylesheet" href="/proveedores/css/style.css" />
			<link rel="stylesheet" href="/proveedores/css/style-wide.css" />
			<link rel="stylesheet" href="/proveedores/css/style-normal.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->



		<style>
						/*********************************************************************************/
						/* Intro                                                                         */
						/*********************************************************************************/
						
							#intro {
								background: url('/proveedores/images/overlay.png'), url('/images/proveedores/{{ $proveedores->nombre_usuario }}/{{ $proveedores_detalle->imagen_intro }}');
								background-size: 256px 256px, cover;
								background-attachment: fixed, fixed;
								background-position: top left, bottom center;
								background-repeat: repeat, no-repeat;
							}
						
						/*********************************************************************************/
						/* One                                                                           */
						/*********************************************************************************/
						
							#one {
								background: url('images/overlay.png'), url('/images/proveedores/{{ $proveedores->nombre_usuario }}/{{ $proveedores_detalle->imagen_descripcion }}');
								background-size: 256px 256px, cover;
								background-attachment: fixed, fixed;
								background-position: top left, center center;
							}
						
						/*********************************************************************************/
						/* Two                                                                           */
						/*********************************************************************************/
						
							#two {
								background: url('images/overlay.png'), url('/images/proveedores/{{ $proveedores->nombre_usuario }}/{{ $proveedores_detalle->imagen_vision }}');
								background-size: 256px 256px, cover;
								background-attachment: fixed, fixed;
								background-position: top left, center center;
							}	
						/*********************************************************************************/
						/* Galeria                                                                           */
						/*********************************************************************************/
						
							#galeria {
								background: url('images/overlay.png'), url('/images/fondoproveedores.png');
								background-attachment: fixed, fixed;
								background-position: top left, center center;
							}									
		</style>    

<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>

	</head>
	<body>

		<!-- Header -->
			<header id="header">

				<!-- Logo -->
					<h1 id="logo"><a href="/"><i class="fa fa-home" style="color:#FFB500;"></i> Todo Construimos</a> | {{ $proveedores->nombre }}</h1>
				
				<!-- Nav -->
					<nav id="nav">
						<ul>
							<li><a href="#intro">Intro</a></li>
							<li><a href="#one">Qué hacemos</a></li>
							<li><a href="#two">Quiénes somos</a></li>
							<li><a href="#galeria">Nuestro trabajo</a></li>
							<li><a href="#contact">Contacto</a></li>
						</ul>
					</nav>

			</header>
			
		<!-- Intro -->
			<section id="intro" class="main style1 dark fullscreen">
				<div class="content container small">
					<header>
						<h2>{{ $proveedores->nombre }}</h2>
					</header>
					<p>Bienvenidos a nuestra página</p>
					<footer>
						<a href="#one" class="button style2 down">More</a>
					</footer>
				</div>
			</section>
		
		<!-- One -->
			<section id="one" class="main style2 right dark fullscreen">
				<div class="content box style2">
					<header>
						<h2>Qué hacemos</h2>
					</header>
					<p>{{ $proveedores_detalle->introduccion }}</p>
				</div>
				<a href="#two" class="button style2 down anchored">Next</a>
			</section>
		
		<!-- Two -->
			<section id="two" class="main style2 left dark fullscreen">
				<div class="content box style2">
					<header>
						<h2>Quiénes somos</h2>
					</header>
					<p>{{ $proveedores_detalle->descripcion }}</p>
				</div>
				<a href="#work" class="button style2 down anchored">Next</a>
			</section>
			
			
		<!-- Work -->
			<section id="galeria" class="main style3 secondary" style"background-color: #00ff00;>
				<div class="content container">
					<header>
						<h2>Nuestro trabajo</h2>
						<p>{{ $proveedores_detalle->productos }}</p>
					</header>
					
					<!-- Lightbox Gallery  -->
						<div class="container small gallery">
							<div class="row flush images">


									@foreach ($galeria as $foto)
									
										<div class="4u"><a href="/images/proveedores/{{ $proveedores->nombre_usuario }}/galeria/{{ $foto->imagen }}" class="image fit from-left"><img src="/images/proveedores/{{ $proveedores->nombre_usuario }}/galeria/{{ $foto->imagen }}" title="{{$foto->texto}}" alt="{{$foto->texto}}" /></a></div>

									@endforeach

							</div>
						</div>

				</div>
			</section>
			
		<!-- Contact -->
			<section id="contact" class="main style3 secondary">
				<div class="content container">
					<header>
						<h2>Contacto</h2>
						<p>{{ $proveedores->direccion }}</p>
                        <p>{{ $proveedores->telefono }}</p>
					</header>
					<div class="box container small">
					


<div id="gmap_canvas" style="height:400px;width:800px;"></div>
<style>#gmap_canvas img{max-width:none!important;background:none!important}#maps{width:800px;font-size:10px;font-family:arial;text-align:right;}</style>

<script type="text/javascript">jQuery(document).ready(function(){jQuery('.gmap').hide();jQuery("#maps span").click(function() {var $this = $(this);$this.next("div").fadeToggle();$('.gmap').not($this.next("div")).fadeOut();});});</script>
<div id="maps"><span>Google Maps © 2014</span><div class="gmap">supported by <a href="http://www.sparbalu.com/gutscheine/baur">http://www.sparbalu.com/gutscheine/baur</a></div></div>
<script type="text/javascript"> function init_map(){var myOptions = {zoom:14,center:new google.maps.LatLng({{ $proveedores->latitud }},{{ $proveedores->longitud }}),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng({{ $proveedores->latitud }}, {{ $proveedores->longitud }})});infowindow = new google.maps.InfoWindow({content:"<b>{{ $proveedores->nombre }}</b><br/>{{ $proveedores->direccion }}<br/>{{ $proveedores->telefono }}" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>


					</div>
				</div>
			</section>
			
		<!-- Footer -->
			<footer id="footer">
			
				<!--
				     Social Icons
				     
				     Use anything from here: http://fortawesome.github.io/Font-Awesome/cheatsheet/)
				-->
					<ul class="actions">
						<li><a href="{{ $proveedores->twitter }}" class="fa solo fa-twitter"><span>Twitter</span></a></li>
						<li><a href="{{ $proveedores->facebook }}" class="fa solo fa-facebook"><span>Facebook</span></a></li>
					</ul>

				<!-- Menu -->
					<ul class="menu">
						<li>&copy; {{ $proveedores->nombre }} </li>
					</ul>
			
			</footer>

	</body>
</html>