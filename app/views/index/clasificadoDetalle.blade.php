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
</style>




	<!-- ENCABEZADO -->
	<div class="header sTop hidden-xs">
		<div class="logo">
			<a href="index.html"><img src="/index/images/logoTodoConstruimos.png" alt=""/></a>
		</div>
	    <div class="slider_container">
        
                <div class="wmuSlider example1 ">
                
                
                       <div class="wmuSliderWrapper">
						   @foreach ($anuncios as $anuncio)					   
                           <article style="position: absolute; width: 100%; opacity: 0;"> 
                             <div class="banner-wrap">
                                 <div class="slider-left">
                                    <h2></h2>
                                    <p class="top_desc">{{$anuncio->anuncio}}</p>
                                    <p class="bottom_desc">{{$anuncio->periodo}}</p>
                                 </div>
                             </div>
                            </article>
						    @endforeach
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
    
    
    
    
    
                 <div style="width:100%; background-color:#ffffff; border-top: 7px solid #ffffff; border-bottom: 7px solid #ffffff;">
                            <div class="owl-carousel">
                              <div> <img src="http://www.jamesgood.co.uk/sites/default/files/Logo-Blog_58.png" alt=""/> </div>
                              <div> <img src="http://picsoff.com/files/funzug/imgs/informative/co_logos_mean_09.jpg" alt=""/> </div>
                              <div> <img src="http://www.davemanuel.com/images/logo_caterpillar.gif" alt=""/> </div>
                              <div> <img src="http://lockergnome.net/upfiles/sony-ericsson-logo.jpg" alt=""/> </div>
                              <div> <img src="http://www.gaadi.com/blog/wp-content/uploads/2012/01/hyundai-logo_689400766.jpg" alt=""/> </div>
                              <div> <img src="http://images.cardekho.com/images/carnews/All-Car-Logo/Honda.jpg" alt=""/> </div>
                              <div> <img src="http://www.triadcouponing.com/wp-content/uploads/2011/03/walmart-logo.gif" alt=""/> </div>
                              <div> <img src="http://blog.edelman.com.au/wp-content/uploads/2011/02/Heineken-logo.jpg" alt=""/> </div>
                              <div> <img src="http://static6.businessinsider.com/image/4beaf2ee7f8b9ad075d90000-1200/your-business-name-will-affect-your-logo-design.jpg" alt=""/> </div>
                              <div> <img src="http://cdn2.capterra-static.com/assets/customers/cocacola-logo-4x3-98b53c1de3b9b10a3cf91cb776e3e4c5.png" alt=""/> </div>
                              <div> <img src="http://lazytechguys.com/wp-content/uploads/2011/01/sony_logo.jpg" alt=""/> </div>
                              <div> <img src="http://www.userlogos.org/files/logos/macleod.mac/dominos.1.u.png" alt=""/> </div>
                              <div> <img src="http://2.bp.blogspot.com/-rVweqpkeAOA/URxxk3_8QKI/AAAAAAAAANU/R0zd6ZBs9eg/s400/Logo+Puma+4.jpeg" alt=""/> </div>
                              <div> <img src="http://4.bp.blogspot.com/_1I7KiCuAU4k/SKkpG-SBiTI/AAAAAAAABcc/rNwmp6bUpKk/s400/Sinclair_oil_dinosaurs_kidicarus222.jpg" alt=""/> </div>
                              <div> <img src="https://m1.behance.net/rendition/modules/23318251/disp/1a7efdd39dd4a8e4680c7b4b466f1668.jpg" alt=""/> </div>
                              <div> <img src="http://img.logoinlogo.com/120724070738-juice-time-011.jpg" alt=""/> </div>
                              <div> <img src="http://cdn.net.outdoorhub.com/wp-content/uploads/sites/3/2012/03/REI-Logo-400x300.jpg" alt=""/> </div>
                            </div>        
                </div>   
    
    
    
    
    
    
    
     <!-- MENU -->
	<nav class="subMenu navbar-custom navbar-scroll-top smint" role="navigation" style="position: absolute; top: 380px;">
	        <div class="container">
	            <div class="navbar-header page-scroll">
	                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-main-collapse">
	                    <img src="/index/images/nav-icon.png" title="drop-down-menu"> 
	                </button>
	            </div>
	            <div class="navbar-collapse navbar-left navbar-main-collapse collapse" style="height: 1px;">
	                <ul class="nav navbar-nav">
	                    <li>
	                        <a class="subNavBtn" href="/">Inicio</a>
	                    </li>
	                    <li class="page-scroll">
	                        <a id="blogescrito" class="subNavBtn" href="#">Blog</a>
	                    </li>
	                    <li class="page-scroll active">
	                        <a id="directorio" class="subNavBtn" href="#">Directorio</a>
	                    </li>                        
                        <li class="page-scroll">
	                        <a id="galeria" class="subNavBtn" href="#">Galer&iacute;a</a>
	                    </li>
                        <li class="page-scroll">
	                        <a id="eventos" class="subNavBtn" href="#">Eventos</a>
	                    </li>
	                    <li class="page-scroll">
	                        <a id="clasificados" class="subNavBtn  active" href="#">Clasificados</a>
	                    </li>
                        <li class="page-scroll">
	                        <a id="videoblog" class="subNavBtn" href="#">Video Blog</a>
	                    </li>
	                    <li class="page-scroll">
	                        <a id="contacto" class="subNavBtn" href="#">Contacto</a>
	                    </li>
	                </ul>
	            </div>
	            <!-- /.navbar-collapse -->
	             	<a id="sTop" class="right-msg subNavBtn msg-icon" href="#"><span> </span></a>
	                <div class="clearfix"> </div>
	        </div>
	        <!-- /.container --><br>
   	  </nav>
      <!-- MENU -->



    <!-- ************* -->
    <div class="signup directorio">
    
   	  <div class="container">
            <div class="slider-left">
              <h1><img src="/index/images/Clasificados.png" alt="Eventos"></h1>
            </div>
   	   <div class="row text-center">
   	    <div class="col-md-12 service_grid" style="padding:20px;">

 		  		{{-- */$i=0;/* --}}
				@foreach ($categoriasClasif as $categoriaC)
					@if ($i==0)
						<div class="row" style="background:rgba(0,0,0,0.3);">
					@endif
					
					<div class="col-md-6" align="left"  style="padding:20px; color:#FFF;"><a href="../directorioClasif/{{ $categoriaC->id }}"><i class="fa {{ $categoriaC->icono }}"></i> {{ mb_strtoupper($categoriaC->categoria, 'utf-8') }}</a></div>
			
					
					{{-- */$i++;/* --}}

					@if ($i==4)
						</div>
						{{-- */$i=0;/* --}}
					@endif						
				@endforeach
				<br>
   		</div>
	<br><br>


	 
				<?php
				
				
				  	 $i=0;
   	    			echo '';
					echo '<div class="container" style="margin-top: 150px; background:#ffb500; padding-top: 2em;padding-bottom: 2em">'; 
					
						$clasfImgs = $clasificado->imagenes;
						
						$fecPubString = $clasificado->fecha_publicacion;
						$utc_date = new DateTime(
						$fecPubString, new DateTimeZone('UTC'));
						$tj_date = $utc_date;
						$tj_date->setTimeZone(new DateTimeZone('America/Tijuana'));
						
						echo '<div class="row" style="padding-left: 2em;padding-right: 2em;"><div class="col-md-12">
						<h3 style="text-align: center;">';
						//echo ''.(($clasificado->premium==1)?'<img src="../images/premium.png" style="width: 25px; height: 25px; position: relative;margin-bottom: 10px;"> ':' ');
						echo ''.mb_strtoupper($clasificado->titulo, 'utf-8').'</h3>
								</div></div>';
								
/*
						echo '<br>';
						echo '<div class="row"><div class="col-md-12">';
						echo '<div class="owl-carousel-clasificados">';
							foreach ($clasfImgs as $img){

                              echo '<div>
                                    <img src="/images/clasificados/'.$img->nombre_imagen.'" alt="" class="img-thumbnail" style="width: 200px;height: 200px;"></div>';
							}					
						echo '</div>'; 
						echo '</div></div><br><br>';
							*/	
							?>
	<br>
	<div class="slider_container" style="width: 600px;">
	<div id="clasfSlider" class="wmuSlider example2 ">
	<div class="wmuSliderWrapper" style="margin-left: 75px;">
							@foreach ($clasificado->imagenes as $img)
							<article style="position: absolute; width: 100%; opacity: 0;"> 
                                    <img src="/images/clasificados/{{$img->nombre_imagen}}" alt="" class="img-thumbnail" style="width: 450px;height: 250px;"></article>
									
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
<br><br>	
							
				<?php			
						echo '<div class="row" style="padding-left: 2em;padding-right: 2em;"><div class="col-md-2">
							 <p style="text-align: -webkit-left;font-weight: 700" >Fecha de publicación:</p>
								</div>
							<div class="col-md-10">
							 <p style="text-align: -webkit-left;" > '.date_format($tj_date, "d M Y H:i a").'</p>
								</div>';
						echo '</div><br>';

						echo '<div class="row" style="padding-left: 2em;padding-right: 2em;"><div class="col-md-2">
							 <p style="text-align: -webkit-left;font-weight: 700" >Precio:</p>
								</div>
							<div class="col-md-10">
							 <p style="text-align: -webkit-left;" > '.$clasificado->precio.' '.$clasificado->moneda.'</p>
								</div>';
						echo '</div><br>';						
	

						echo '<div class="row" style="padding-left: 2em;padding-right: 2em;"><div class="col-md-2">
							 <p style="text-align: -webkit-left;font-weight: 700" >Descripción:</p>
								</div>
							<div class="col-md-10">
							 <p style="text-align: -webkit-left;" > '.$clasificado->descripcion.'</p>
								</div>';
						echo '</div><br>';		
						
						echo '<div class="row" style="padding-left: 2em;padding-right: 2em;"><div class="col-md-2">
							 <p style="text-align: -webkit-left;font-weight: 700" >Categoria:</p>
								</div>
							<div class="col-md-10">
							 <p style="text-align: -webkit-left;" > '.$clasificado->categoria->categoria.'</p>
								</div>';
						echo '</div><br>';	
								
						echo '<div class="row" style="padding-left: 2em;padding-right: 2em;"><div class="col-md-2">
							 <p style="text-align: -webkit-left;font-weight: 700" >Premium:</p>
								</div>
							<div class="col-md-10">
							 <p style="text-align: -webkit-left;" > '.(($clasificado->premium == 1)? 'Si': 'No').'</p>
								</div>';
						echo '</div><br>';									
								
					echo '</div> ';	
				
				?>


   		</div>
   	  </div>
   	  </div>    

   	</div>
    <!-- ************* -->


    
    
    
    
    
    <!-- ************* -->
   	<div class="footer">
   		<div class="container">
   			<div class="copy">
		       <p>&copy; 2014 <a href="index.php" target="_blank"> Todo construimos</a></p>
		    </div>
		    <div class="social">	
		      <ul>	
			   <li class="facebook"><a href="#"><span> </span></a></li>
			   <li class="twitter"><a href="#"><span> </span></a></li>
			   <li class="google"><a href="#"><span> </span></a></li>			
		     </ul>
			</div>
			<div class="clearfix"></div>
   		</div>
   	</div>
    <!-- ************* -->
    
    
    
    
    
   	<script src="/index/js/bootstrap.min.js"></script>
</body>
</html>

