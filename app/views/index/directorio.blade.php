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
<link rel="stylesheet" href="/index/css/clasificados.css" />
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,500,700,900' rel='stylesheet' type='text/css'>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<script src="/index/js/owl.carousel.2.0.0-beta.2.4/owl.carousel.js"></script>
<link rel="stylesheet" type="text/css" href="/index/js/owl.carousel.2.0.0-beta.2.4/assets/owl.carousel.css">
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

			    $('.subMenu').smint({
			    	'scrollSpeed' : 1000,
			    });						
				
			});
			
			
			
			
			
			
		</script>
		<style>
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
    color: #FFFFFF;
}

</style>

<link href="http://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">



</head>






<body>







	<!-- ENCABEZADO -->
	<div class="header sTop hidden-xs">
			@include('index.include_login')	



		
		<div class="logo">
			<a href="../"><img src="/index/images/logoTodoConstruimos.png" alt=""/></a>
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
    
    
    
    
    
                 <div style="width:100%; background-color:#ffffff; border-bottom: 5px solid #ffffff;margin-top: -5px;border-top: 5px solid #ffffff">
						@include('index.include_logos')       
                </div>   
    
    
    
    
    
    
    
     <!-- MENU -->
	<div class="subMenu navbar-custom navbar-scroll-top smint" role="navigation" style="position: absolute; top: 380px;">
		@include('index.include_menusubseccion')
   	</div>
      <!-- MENU -->
      
   
   
   
  
  
  
  
    <!-- ************* -->
    <div style="background-color:#2d2d2d;">
    
   	  <div style="width:100%;">
            <div class="slider-left;" style="width:100%; background-color:#FFB500; padding:10px;">
              <h1 align="center"><img src="/index/images/Directorio_dark.png" alt="Directorio"></h1>
            </div>
   	   
   	   <div class="row">
   	    

   	    <div class="col-md-2 service_grid" style="padding:20px">
			@include('index.include_bannerizq')
   		</div>
   	    

   	    <div class="col-md-8" style="padding:20px; text-align:jusify; font: 400 14px/1.6 'Open Sans', Verdana, Helvetica, sans-serif;">

   	    	<div class="row">
   	    		
					<nav style="margin: 20px auto;">
						<ul>   		  		
				@foreach ($categorias as $categoria)
					
					<li><a href="/directorio/{{ $categoria->tipo }}" style="font-size:13px;"><i class="fa {{ $categoria->icono }}" style="color:#FFB500; font-size:13px;"></i> {{ $categoria->tipo }}</a></li>
					
				@endforeach
						</ul>
					</nav>
   	    		<?php
   	    			$i=0;
					?>
					@foreach($listaCategoria as $cat)
   	    				<div class="row" align="left" style="background:rgba(0,0,0,0.3);padding:20px; color:#FFF;border-radius: 10px;margin-bottom: 5px;">   	    					
		   	    			<div class='row'>
		   	    				<div class='col-md-12'>{{$cat->nombre}}</div>
		   	    			</div>
		   	    			<div class='row'>
		   	    				<div class='col-md-12'>{{$cat->productos}}<br><br></div>
		   	    			</div>
		   	    			<div class='row'>
		   	    				<div class='col-md-12'>{{$cat->direccion}} <br> Tel: {{$cat->telefono}}</div>
		   	    			</div>
		   	    			<div class='row'>
		   	    				<div class='col-md-12'><br>Visitar página: <a href='/proveedores/{{$cat->nombre_usuario}}'> {{$cat->nombre_usuario}} </a></div>
		   	    			</div>
		   	    		<?php
	   	    				$i++;
						?>
	   	    			</div>
   	    			@endforeach 	    			

   	    		
   	    	</div>
   	    	   	    		
   		</div>
   	    

   	    <div class="col-md-2 service_grid" style="padding:20px;">
			@include('index.include_bannerder')
   		</div>


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