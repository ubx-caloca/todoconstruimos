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
<link rel="stylesheet" href="/index/js/owl.carousel.2.0.0-beta.2.4/assets/owl.theme.css">
<script src="/index/js/easing.js"></script>
	<script type="text/javascript" 	src="/index/js/jquery.smint.js"></script>
		<script type="text/javascript">
			$(document).ready( function() {


				$('.owl-carousel').owlCarousel({
					loop:true,

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
							items:4,
							nav:false,
							loop:true,
							
						},
						1500:{
							items:5,
							nav:false,
							loop:true,
							
						},
						2300:{
							items:6,
							nav:false,
							loop:true,
							
						},
						2700:{
							items:7,
							nav:false,
							loop:true,
							
						},
						3100:{
							items:8,
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
}

.navlogin {
    left:100%;
    margin-left:-305px;
    top:5px;
    position:absolute;
	font-family: Lato, sans-serif;
	font-size: 16px;
	
	
}
.navlogin>li>a:hover, .navlogin>li>a:focus, .navlogin .open>a, .navlogin .open>a:hover, .navlogin .open>a:focus {
    background:#fff;
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
.dropdown ul.dropdown-menu:before {
    content: "";
    border-bottom: 10px solid #fff;
    border-right: 10px solid transparent;
    border-left: 10px solid transparent;
    position: absolute;
    top: -10px;
    right: 16px;
    z-index: 10;
}
.dropdown ul.dropdown-menu:after {
    content: "";
    border-bottom: 12px solid #ccc;
    border-right: 12px solid transparent;
    border-left: 12px solid transparent;
    position: absolute;
    top: -12px;
    right: 14px;
    z-index: 9;
}

.loginText {
	border-radius: 3px;
}
.loginSummitBtn{
border-radius: 3px;
-webkit-appearance: button;
color: #414042; 
background-color: #FCB200; 
background-image: linear-gradient(rgba(0,0,0,0),rgba(0,0,0,0.05)); 
border: lavender; 
padding-left: 10px; 
padding-right: 10px; 
padding-top: 3px; 
padding-bottom: 3px; 
font-weight: 700;
}
/* unvisited link */
a:link {
    color: #FFFFFF;
}

/* visited link */
a:visited {
    color: #FFFFFF;
}

/* mouse over link */
a:hover {
    color: #FF00FF;
}

/* selected link */
a:active {
    color: #0000FF;
}

.class1 A:link {text-decoration: none;color: #191919;}
.class1 A:visited {text-decoration: none;color: #191919;}
.class1 A:active {text-decoration: none;color: #191919;}
.class1 A:hover {text-decoration: underline;color: #191919;}
A.signuplink:hover {color: #FCB200;}

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
	<div class="header sTop hidden-xs">
			<div class="socialtop">	
		      <ul style="-webkit-padding-start: 0px;">	
			   <li class="facebook"><a href="http://www.facebook.com/todoconstruimos" target="_blank"><span> </span></a></li>
			   <li class="twitter"><a href="#" target="_blank"><span> </span></a></li>
			   <li class="google"><a href="#" target="_blank"><span> </span></a></li>			
		     </ul>
			</div>
			@include('index.include_login')	
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
	<div style="width:100%; background-color:#FAFFBD; border-bottom: 5px solid #FAFFBD;border-top: 5px solid #FAFFBD">
		@include('index.include_logos')       
    </div> 
	
    <!-- MENU -->
	<div class="subMenu navbar-custom navbar-scroll-top smint" role="navigation" style="position: absolute; top: 380px;">
		@include('index.include_menusubseccion')
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

  	   <div class="row text-center">
   	    

   	    <div class="col-md-2 service_grid" >
			@include('index.include_bannerizq')
   		</div>

		<div class="col-md-8" style="padding:20px;">
	  
				<h2 style="padding:20px; color:#FFF;">{{strtoupper($directorioCat)}}</h2>
				<?php
				  	 $i=0;
				?>
   	    			@foreach($listaClasificadosPremium as $cat)	
					<?php
						$lasfImgs = $cat->imagenes;
						
						$fecPubString = $cat->fecha_publicacion;
						$utc_date = new DateTime(
						$fecPubString, new DateTimeZone('UTC'));
						$tj_date = $utc_date;
						$tj_date->setTimeZone(new DateTimeZone('America/Tijuana'));
					?>
						
					    <a href="../clasificadoDetalle/{{$cat->id}}">
						<div class="row" id="clasfListItem" style="padding: 10px; overflow: inherit;">					
							<div class="col-md-2" style="padding-right: 0px;">
								{{(($cat->premium==1)?'<img src="../images/premium2.png" class="pull-left" alt="Premium" style="width: 35px;height: 35px;position: absolute;left: 0;margin-top: -20px;margin-left: -23px;"> ':' ')}}						
								<img src="{{(($lasfImgs->isEmpty())?'../images/No_image_available.png': '../images/clasificados/'.$lasfImgs[0]->nombre_imagen)}}" class="img-responsive" style="margin: 0 0 0 -12px;">
							</div>
							<div class="col-md-10" >
								<h3 style="text-align: -webkit-left;color:black">{{mb_strtoupper($cat->titulo, 'utf-8')}}</h3>
								<p style="text-align: -webkit-left;font-size: smaller;font-style: normal;color: mediumblue;" > Publicado el {{date_format($tj_date, "d M Y H:i a")}} por {{$cat->usuario->nombre }}</p>
								<p style="text-align: -webkit-left;font-size: smaller;font-style: normal;color: black;" > Precio: {{'$ '.number_format (  $cat->precio , 2 ,  '.' , ',' ).' '.$cat->moneda}}</p>
								<br>
								<p style="text-align: -webkit-left;color:black;" >{{Str::limit($cat->descripcion, 500)}}</p>
								
							</div>
						</div>
						</a>
						
						<?php
						$i++;
						?>
   	    			@endforeach	
					
   	    			@foreach($listaClasificadosNormales as $cat)
					<?php
						$lasfImgs = $cat->imagenes;
						
						$fecPubString = $cat->fecha_publicacion;
						$utc_date = new DateTime(
						$fecPubString, new DateTimeZone('UTC'));
						$tj_date = $utc_date;
						$tj_date->setTimeZone(new DateTimeZone('America/Tijuana'));
					?>
						
					    <a href="../clasificadoDetalle/{{$cat->id}}">
						<div class="row" id="clasfListItem2" style="padding: 10px; overflow: auto;">
							<div class="col-md-2" style="padding-right: 0px;">
								<img src="{{(($lasfImgs->isEmpty())?'../images/No_image_available.png': '../images/clasificados/'.$lasfImgs[0]->nombre_imagen)}}" class="img-responsive" style="margin: 0 0 0 -12px;">
							</div>
							<div class="col-md-10">
								<h3 style="text-align: -webkit-left;color:black">{{mb_strtoupper($cat->titulo,'utf-8')}}</h3>
								<p style="text-align: -webkit-left;font-size: smaller;font-style: normal;color: mediumblue;" > Publicado el {{date_format($tj_date, "d M Y H:i a")}} por {{$cat->usuario->nombre}}</p>
								<p style="text-align: -webkit-left;font-size: smaller;font-style: normal;color: black;" > Precio: {{'$ '.number_format (  $cat->precio , 2 ,  '.' , ',' ).' '.$cat->moneda}}</p>
								<p style="text-align: -webkit-left;color:black;" >{{Str::limit($cat->descripcion, 500)}}</p>
							</div>
						</div>
						</a>
						<?php
						$i++;
						?>
   	    			@endforeach							

   
	  
	  
	  </div>
	     <div class="col-md-2 service_grid">
			@include('index.include_bannerder')
   		</div>
	  </div>

   	</div>
    <!-- ************* -->


    
    
    
    
    
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

