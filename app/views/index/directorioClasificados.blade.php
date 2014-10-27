<!DOCTYPE HTML>
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
		
		  <style type="text/css">
		  #clasfListItem {
			background: #ffb500;
			border-radius : 7px;
			margin-bottom: 3px;
		  }
#clasfListItem:hover {
  background: #eaa600;
  cursor: pointer;
}

#clasfListItem2 {
background: floralwhite;
border-radius: 7px;
margin-bottom: 3px;
}
#clasfListItem2:hover {
  background: cornsilk;
  cursor: pointer;
}
.mainclasdir{
	border-top: 0px solid #ffb500;
	padding: 2em 0;
|

  </style>
</head>






<body>







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
	        <div class="container">
	            <div class="navbar-header page-scroll">
	                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-main-collapse">
	                    <img src="/index/images/nav-icon.png" title="drop-down-menu"> 
	                </button>
	            </div>
	            <div class="navbar-collapse navbar-left navbar-main-collapse collapse" style="height: 1px;">
	                <ul class="nav navbar-nav">
	                    <li class="page-scroll">
	                        <a id="sTop" class="subNavBtn" href="/">Inicio</a>
	                    </li>
	                    <li class="page-scroll">
	                        <a id="blogescrito" class="subNavBtn" href="">Blog</a>
	                    </li>
	                    <li class="page-scroll">
	                        <a id="directorio" class="subNavBtn" href="">Directorio</a>
	                    </li>                        
                        <li class="page-scroll">
	                        <a id="galeria" class="subNavBtn" href="">Galer&iacute;a</a>
	                    </li>
                        <li class="page-scroll">
	                        <a id="eventos" class="subNavBtn" href="">Eventos</a>
	                    </li>
	                    <li class="active">
	                        <a id="clasificados" class="subNavBtn  active" href="">Clasificados</a>
	                    </li>
                        <li class="page-scroll">
	                        <a id="videoblog" class="subNavBtn" href="">Video Blog</a>
	                    </li>
	                    <li class="page-scroll">
	                        <a id="contacto" class="subNavBtn" href="">Contacto</a>
	                    </li>
	                </ul>
	            </div>
	            <!-- /.navbar-collapse -->
	             	<a id="sTop" class="right-msg subNavBtn msg-icon" href="#"><span> </span></a>
	                <div class="clearfix"> </div>
	        </div>
	        <!-- /.container -->
   	  </div>
      <!-- MENU -->
         
   




    <!-- ************* -->
    <div class="signup directorio mainclasdir">
    
   	  <div class="container">
            <div class="slider-left">
              <h1><img src="/index/images/Clasificados.png" alt="Eventos"></h1>
            </div>
   	   <div class="row text-center">
   	    <div class="col-md-12 service_grid" >

		   	    	<div style="width:100%; margin:0 auto; background-color:#eaa600;">
						<nav style="margin: 30px auto;">
							<ul>   		  			   		  		
						@foreach ($categoriasClasif as $categoriaC)

							
							<li><a href="./{{ $categoriaC->id }}"style="font-size:13px;"><i class="fa {{ $categoriaC->icono }}" style="color:#FFB500; font-size:13px;"></i> {{ mb_strtoupper($categoriaC->categoria, 'utf-8') }}</a></li>

				
						@endforeach
							<li><a href="../directorioClasif/all"style="font-size:13px;"><i class="fa fa-bars" style="color:#FFB500; font-size:13px;"></i> {{ mb_strtoupper('Todos', 'utf-8')}}</a></li>
							</ul>
						</nav>							

					</div>	
	  </div> 
	  </div>
	  </div>
				
				<h2 style="padding:20px; color:#FFF;">{{strtoupper($directorioCat)}}</h2>
				<div class="container">
				<?php
				  	 $i=0;
					 //<ul style="list-style-type: none; width: 100%;">';
   	    			foreach($listaClasificadosPremium as $cat){	
						$lasfImgs = $cat->imagenes;
						
						$fecPubString = $cat->fecha_publicacion;
						$utc_date = new DateTime(
						$fecPubString, new DateTimeZone('UTC'));
						$tj_date = $utc_date;
						$tj_date->setTimeZone(new DateTimeZone('America/Tijuana'));
						
						
					    echo '<a href="../clasificadoDetalle/'.$cat->id.'">';
						echo '<div class="row" id="clasfListItem" style="padding: 10px; overflow: inherit;">';						
						echo '<div class="col-md-1">';
												echo ''.(($cat->premium==1)?'<img src="../images/premium2.png" class="pull-left" alt="Premium" style="width: 35px;height: 35px;position: absolute;left: 0;margin-top: -20px;margin-left: -23px;"> ':' ');						
						echo '<img src="'.(($lasfImgs->isEmpty())?'../images/No_image_available.png': '../images/clasificados/'.$lasfImgs[0]->nombre_imagen).'" style="width:100px; height: 100px; margin: 0 0 0 -12px;">
								</div>
								<div class="col-md-11"  style="padding-left: 20px;">
								<h3 style="text-align: -webkit-left;color:black">'.mb_strtoupper($cat->titulo, 'utf-8').'</h3>
								<p style="text-align: -webkit-left;font-size: smaller;font-style: normal;color: mediumblue;" > Publicado el '.date_format($tj_date, "d M Y H:i a").' por '.$cat->usuario->nombre .'</p>
								<p style="text-align: -webkit-left;color:black;" >'.Str::limit($cat->descripcion, 1000).'</p><br>
								<p style="text-align: -webkit-left;color:black;" > Precio: '.$cat->precio.' '.$cat->moneda.'</p>
								</div>
							 </div></a>';
						$i++;
   	    			} 	
   	    			foreach($listaClasificadosNormales as $cat){	
						$lasfImgs = $cat->imagenes;
						
						$fecPubString = $cat->fecha_publicacion;
						$utc_date = new DateTime(
						$fecPubString, new DateTimeZone('UTC'));
						$tj_date = $utc_date;
						$tj_date->setTimeZone(new DateTimeZone('America/Tijuana'));
						
						
					    echo '<a href="../clasificadoDetalle/'.$cat->id.'"><div class="row" id="clasfListItem2" style="padding: 10px; overflow: auto;">
								<div class="col-md-1">
								<img src="'.(($lasfImgs->isEmpty())?'../images/No_image_available.png': '../images/clasificados/'.$lasfImgs[0]->nombre_imagen).'" style="width:100px; height: 100px; margin: 0 0 0 -12px;">
								</div>
								<div class="col-md-11"  style="padding-left: 20px;">
								<h3 style="text-align: -webkit-left;color:black">'.(($cat->premium==1)?'<img src="../images/premium.png" style="width:20px; height: 20px; float: left;"> ':' ').strtoupper($cat->titulo).'</h3>
								<p style="text-align: -webkit-left;font-size: smaller;font-style: normal;color: mediumblue;" > Publicado el '.date_format($tj_date, "d M Y H:i a").' por '.$cat->usuario->nombre .'</p>
								<p style="text-align: -webkit-left;color:black;" >'.Str::limit($cat->descripcion, 1000).'</p><br>
								<p style="text-align: -webkit-left;color:black;" > Precio: '.$cat->precio.' '.$cat->moneda.'</p>
								</div>
							 </div></a>';
						$i++;
   	    			} 					
					echo '</div> ';//'</ul></div>';			
				
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
		       <p>&copy; 2014 <a href="/" > Todo construimos</a></p>
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

