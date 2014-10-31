﻿<!DOCTYPE HTML>
<html>





<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale = 1.0, user-scalable=0">
<title>Todo Construimos</title>
<link href="/index/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!--<link href="/index/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<script src="/index/js/bootstrap.min.js"></script>-->
<link href="/index/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="/index/css/clasificados.css" />
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
				
			});
			
			
			
			
			
			
		</script>	
		
</head>






<body>


<style>
#clasfSlider a{
	top:30%;
}
.mainclasdir{
	border-top: 0px solid #ffb500;
	padding: 2em 0;
}

.wmuSliderPrev, .wmuSliderNext {
	position: absolute;
	width: 70px;
	height: 70px;
	text-indent: -9999px;
	background: url(../index/images/img-sprite-darker.png)no-repeat;
	top:5%;
	z-index: 2;
	cursor: pointer;
}
.wmuSliderPrev {
background-position: -13px -8px;
left: 0px;
}
.wmuSliderNext {
background-position: -83px -8px;
right: 0px;
}

</style>




	<!-- ENCABEZADO -->
	<div class="header sTop hidden-xs">
		<div class="logo">
			<a href="/"><img src="/index/images/logoTodoConstruimos.png" alt=""/></a>
		</div>
	    <div class="slider_container">
        
                <div class="wmuSlider example1 ">
                
                
                       <div class="wmuSliderWrapper">
							@include('index.include_anuncios')
                        </div>                        

                      </div>
                      <script src="/index/js/jquery.wmuSlider.js"></script> 
                         <script>
                           $('.example1').wmuSlider({
							   
							   paginationControl: false,
							   touch: true,
						   
						   });         
                         </script> 	           	     
                 </div>        
        

       
        

    
	</div> 
    <!-- ENCABEZADO -->

     <!-- MENU -->
	<div class="subMenu navbar-custom navbar-scroll-top smint" role="navigation" style="position: absolute; top: 380px;">
		@include('index.include_menusubseccion')
   	  </div>
      <!-- MENU -->



    <!-- ************* -->
    <div class="signup directorio  mainclasdir">
    
   	  <div class="container">
            <div class="slider-left">
              <h1><img src="/index/images/Clasificados.png" alt="Eventos"></h1>
            </div>
   	   <div class="row text-center">
   	    <div class="col-md-12 service_grid" style="padding:20px;">

		   	    	<div style="width:100%; margin:0 auto; background-color:#eaa600;">
						<nav style="margin: 30px auto;">
							<ul>   		  			   		  		
						@foreach ($categoriasClasif as $categoriaC)

							
							<li><a href="../directorioClasif/{{ $categoriaC->id }}"style="font-size:13px;"><i class="fa {{ $categoriaC->icono }}" style="color:#FFB500; font-size:13px;"></i> {{ mb_strtoupper($categoriaC->categoria, 'utf-8') }}</a></li>

				
						@endforeach
							<li><a href="../directorioClasif/all"style="font-size:13px;"><i class="fa fa-bars" style="color:#FFB500; font-size:13px;"></i> {{ mb_strtoupper('Todos', 'utf-8')}}</a></li>
							</ul>
						</nav>							

					</div>	

		</div>
		</div>
		</div> 

	
   	   <div class="row text-center">
   	    <div class="col-md-2 service_grid" style="padding:20px">
			<center>
				@foreach ($bannersizquierda as $banner)
	   	    		<img src="/images/banners/{{$banner->banner_img}}" alt="" class="img-responsive"/>
	   	    		<hr>
   	    		@endforeach
   	    		<img src="/images/banners/anunciate.png" alt="" class="img-responsive"/>
			</center>
   		</div>
   	    

   	    <div class="col-md-8" style="padding:0px;">			
		
		<div  style="background:#ffb500; padding-top: 2em;padding-bottom: 2em;border-radius: 10px;">
		
		
		
				<?php
				
				
				  	 $i=0;

					
						$clasfImgs = $clasificado->imagenes;
						
						$fecPubString = $clasificado->fecha_publicacion;
						$utc_date = new DateTime(
						$fecPubString, new DateTimeZone('UTC'));
						$tj_date = $utc_date;
						$tj_date->setTimeZone(new DateTimeZone('America/Tijuana'));
				?>
		<div class="row" style="padding-left: 2em;padding-right: 2em;">
			<div class="col-md-12">
				<h3 style="text-align: center;">
				{{mb_strtoupper($clasificado->titulo, 'utf-8')}}</h3>
			</div>
		</div>
		<div class="row" style="padding-left: 2em;padding-right: 2em;">						
			<div class="col-md-6">				

	<div class="slider_container" style="padding-left: 15px;padding-right: 15px;">
	<div id="clasfSlider" class="wmuSlider example2 ">
	<div class="wmuSliderWrapper" >
							@foreach ($clasificado->imagenes as $img)
							<article style="position: absolute; width: 100%; opacity: 0;"> 
							<center>
                                    <img src="/images/clasificados/{{$img->nombre_imagen}}" alt="" class="img-responsive">
									</center>
							</article>
									
							@endforeach				
     </div>                        
    </div>
		                      <script src="/index/js/jquery.wmuSlider.js"></script> 
                         <script>
                           $('.example2').wmuSlider({
							   
							   paginationControl: false,
							   touch: true,
						   
						   });         
                         </script> 
	</div>	
	
	</div>
	<div class="col-md-6">	
		<div class="row" style="padding-left: 0em;padding-right: 0em;">
			<div class="col-md-4">
				<p style="text-align: -webkit-left;font-weight: 700" >Categoría:</p>
			</div>
			<div class="col-md-8">
				<p style="text-align: -webkit-left;" >{{$clasificado->categoria->categoria}}</p>
			</div>
		</div>
		<br>
		<div class="row" style="padding-left: 0em;padding-right: 0em;">
			<div class="col-md-4">
				<p style="text-align: -webkit-left;font-weight: 700" >Creado por:</p>
			</div>
			<div class="col-md-8">
				<p style="text-align: -webkit-left;" >{{$clasificado->usuario->nombre}}</p>
			</div>
		</div>
		<br>	
		<div class="row" style="padding-left: 0em;padding-right: 0em;">
			<div class="col-md-4">
				<p style="text-align: -webkit-left;font-weight: 700" >Fecha de publicación:</p>
			</div>
			<div class="col-md-8">
				<p style="text-align: -webkit-left;" > {{date_format($tj_date, "d M Y H:i a")}}</p>
			</div>
		</div>
		<br>	
		<div class="row" style="padding-left: 0em;padding-right: 0em;">
			<div class="col-md-4">
				<p style="text-align: -webkit-left;font-weight: 700" >Precio:</p>
			</div>
			<div class="col-md-8">
				<p style="text-align: -webkit-left;" > {{$clasificado->precio.' '.$clasificado->moneda}}</p>
			</div>
		</div>
		
	</div>
	</div>
	<div class="row" style="padding-left: 2em;padding-right: 2em;">						
		<div class="col-md-12">
	
		<br>
		<div class="row" style="padding-left: 2em;padding-right: 2em;">
			<div class="col-md-12">
				<p style="text-align: -webkit-left;" > {{$clasificado->descripcion}}</p>
			</div>
		</div>
	
		</div>
	</div>

	</div>		
	
	
	</div>
   	<div class="col-md-2 service_grid" style="padding:20px;">
			<center>
				@foreach ($bannersderecha as $banner)
	   	    		<img src="/images/banners/{{$banner->banner_img}}" alt="" class="img-responsive"/>
	   	    		<hr>
   	    		@endforeach
   	    		<img src="/images/banners/anunciate.png" alt="" class="img-responsive"/>
			</center>
     </div>	
	</div>


   	</div>
    <!-- ************* -->


    
    
    
    
    
    <!-- ************* -->
   	<div class="footer">
   		@include('index.include_footer')
   	</div>
    <!-- ************* -->
    
    
    
    
    
   	<script src="/index/js/bootstrap.min.js"></script>
</body>
</html>

