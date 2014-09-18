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
</style>
</head>






<body>







	<!-- ENCABEZADO -->
	<div class="header sTop hidden-xs">
		<div >

		@if($username == '' || $roluser == '')
		
			<div class="wrap" style="padding-top: 5px;">
			<ul id="headernav" style="float: right;list-style: none;padding-left: 25px;margin-top: 5px;padding-right: 10px;">
				<li class="active"><a href="/signup" style="text-decoration: none;"><span>Registrarse </span> <span class="glyphicon glyphicon-user" style="margin-right: 5px;"></span></a></li>	
			</ul>
				{{ Form::open(array('url' => '/signin')) }}
				<div id="headeruser" style="float: right;padding-top: 3px; max-height: 28px;">
					{{ Form::text('login_email', '', array('placeholder' => 'email@usuario', 'id'=>'navbar_username', 'size' => '15',  'accesskey'=> 'u', 'tabindex'=>'101', 'class'=> 'loginText')) }}
					{{ Form::password('login_password', array('placeholder' => 'Contraseña', 'id'=>'navbar_password', 'size' => '15',  'accesskey'=> 'u', 'tabindex'=>'102', 'class'=> 'bginput loginText')) }}
					{{ Form::submit('Log-in', array('class' => 'button loginSummitBtn', 'tabindex'=>'104', 'accesskey'=>'s')) }}

				</div>
				{{ Form::close() }}
			
		    </div>
		
		@else
		<ul class="navlogin nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="line-height: 10px;padding-top: 10px;padding-bottom: 10px;">{{$username}} <span class="glyphicon glyphicon-user pull-right" style="margin-top: -3px;"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Configuración de usuario <span class="glyphicon glyphicon-cog pull-right"></span></a></li>
            <li class="divider"></li>
			@if($roluser == 'admin')			
            <li><a href="administracion/">Ir a vista de administrador<span class="glyphicon glyphicon-list-alt pull-right"></span></a></li>
            <li class="divider"></li>	
			@else
				<li><a href="#">Agregar nuevo clasificado <span class="glyphicon glyphicon-edit pull-right"></span></a></li>
				<li class="divider"></li>			
			@endif
			<!--
            <li><a href="#">Messages <span class="badge pull-right"> 42 </span></a></li>
            <li class="divider"></li>
            <li><a href="#">Favourites Snippets <span class="glyphicon glyphicon-heart pull-right"></span></a></li>
            <li class="divider"></li>
			-->
            <li><a href="/signout">Salir <span class="glyphicon glyphicon-log-out pull-right"></span></a></li>
          </ul>
        </li>
      </ul>
	  @endif


			@if ($errors->has())
<div style="background: rgba(242,222, 223,255);
margin: 5px;
padding-left: 10px;
padding-right: 10px;
border: 2px #dd9d9d solid;
background-color: #F2DEDF;
-webkit-border-radius: 8px;
-moz-border-radius: 8px;
border-radius: 8px;
color: #a71b2a;
/* padding-top: 10px; */
/* padding-bottom: 10px; */
margin-bottom: 30px;
width: 300px;
font-size: 12px;
position: absolute;
left: 100%;
margin-left: -480px;
top: 35px;
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
		</div>		
		
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
	                    <li class="active">
	                        <a id="sTop" class="subNavBtn active" href="#">Inicio</a>
	                    </li>
	                    <li class="page-scroll">
	                        <a id="blogescrito" class="subNavBtn" href="#">Blog</a>
	                    </li>
	                    <li class="page-scroll">
	                        <a id="directorio" class="subNavBtn" href="#">Directorio</a>
	                    </li>                        
                        <li class="page-scroll">
	                        <a id="galeria" class="subNavBtn" href="#">Galer&iacute;a</a>
	                    </li>
                        <li class="page-scroll">
	                        <a id="eventos" class="subNavBtn" href="#">Eventos</a>
	                    </li>
	                    <li class="page-scroll">
	                        <a id="clasificados" class="subNavBtn" href="#">Clasificados</a>
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
	        <!-- /.container -->
   	  </nav>
      <!-- MENU -->
      
   
   
   
  
  
  
  
     <!-- ************* -->
   <div class="blogescrito" id="blogescrito">
   	  <div class="container">
   	  	<center><h1><img src="/index/images/Blog.png" alt="Eventos"></h1></center><br>
   	   <div class="row text-center">


						@foreach ($blog as $post)

					   	    <div class="col-md-3 service_grid">
					   		  <p><img src="images/blog/{{$post->imagen}} " alt="{{ $post->titulo }}" class="img-thumbnail"></p>
					   		  <h3 class="m_1"><a href="#">{{$post->titulo}}</a></h3>
					   		  <p class="m_2" style="text-align:justify;"><?php  echo Str::limit(strip_tags($post->contenido), 400); ?></p>
					          <p><br><a class="btn btn-default" href="#" target="_blank"><span>Seguir leyendo...</span></a><br>___________________<br><br></p>
					   		</div>

								
						@endforeach

   	  </div>
   	  </div>
   	</div>
    <!-- ************* -->
   
   




    <!-- ************* -->
    <div class="signup directorio">
    
    
    
   	  <div class="container">
            <div class="slider-left">
              <h1><img src="/index/images/Directorio.png" alt="Eventos"></h1>
            </div>
   	   <div class="row text-center">
   	    <div class="col-md-12 service_grid" style="padding:20px;">
   		  		{{-- */$i=0;/* --}}
				@foreach ($categorias as $categoria)
					@if ($i==0)
						<div class="row">
					@endif
					
					<div class="col-md-3" align="left"  style="padding:20px; color:#FFF;"><a href="directorio/{{ $categoria->tipo }}"><i class="fa {{ $categoria->icono }}"></i> {{ $categoria->tipo }}</a></div>
			
					
					{{-- */$i++;/* --}}

					@if ($i==4)
						</div>
						{{-- */$i=0;/* --}}
					@endif						
				@endforeach
				<br>
				<br>
				<br>
   		</div>
   	  </div>
   	  </div>    

   	</div>
    <!-- ************* -->
   
      
      
     
      <!-- GALERIA -->
      <div class="portfolio galeria" id="portfolio">
            <div class="slider-left" style="background-color:#282828;">
              <center><h1><img src="/index/images/Galeria.png" alt="Eventos"></h1></center>
              <br>
            </div>       
	  <div class="portfolio_box">
		<div class="col_1_of_4 span_1_of_4">
	 	   <a href="#" class="b-link-stripe b-animate-go  thickbox">
			<img src="/index/images/galeria/1.png" class="img-responsive" alt=""/>
			    <div class="b-wrapper">
				    <h2 class="b-animate b-from-left    b-delay03 ">
					 <img src="/index/images/p_logo.png" class="img-responsive" alt=""/>
					 <span>CONSTRUCTORA 1</span>
					 <button>Ver galería</button>
					 <label> <i class="heart"> </i></label>
					</h2>
				</div>
			</a>
		</div>
        <div class="col_1_of_4 span_1_of_4">
	 	   <a href="#" class="b-link-stripe b-animate-go  thickbox">
			<img src="/index/images/galeria/2.png" class="img-responsive" alt=""/>
			    <div class="b-wrapper">
				   <h2 class="b-animate b-from-left    b-delay03 ">
					 <img src="/index/images/p_logo.png" class="img-responsive" alt=""/>
					 <span>CONSTRUCTORA 1</span>
					 <button>Ver galería</button>
					 <label> <i class="heart"> </i></label>
					</h2>
				</div>
			</a>
		</div>
        <div class="col_1_of_4 span_1_of_4">
	 	   <a href="#" class="b-link-stripe b-animate-go  thickbox">
			<img src="/index/images/galeria/3.png" class="img-responsive" alt=""/>
			    <div class="b-wrapper">
				   <h2 class="b-animate b-from-left    b-delay03 ">
					 <img src="/index/images/p_logo.png" class="img-responsive" alt=""/>
					 <span>CONSTRUCTORA 1</span>
					 <button>Ver galería</button>
					 <label> <i class="heart"> </i></label>
					</h2>
				</div>
			</a>
		</div>
        <div class="col_1_of_4 span_1_of_4">
	 	   <a href="#" class="b-link-stripe b-animate-go  thickbox">
			<img src="/index/images/galeria/4.png" class="img-responsive" alt=""/>
			    <div class="b-wrapper">
				   <h2 class="b-animate b-from-left    b-delay03 ">
					 <img src="/index/images/p_logo.png" class="img-responsive" alt=""/>
					 <span>CONSTRUCTORA 1</span>
					 <button>Ver galería</button>
					 <label> <i class="heart"> </i></label>
					</h2>
				</div>
			</a>
		</div>

		<div class="clearfix"> </div>
	</div>
	<div class="portfolio_box">
		<div class="col_1_of_4 span_1_of_4">
	 	   <a href="#" class="b-link-stripe b-animate-go  thickbox">
			<img src="/index/images/galeria/5.png" class="img-responsive" alt=""/>
			    <div class="b-wrapper">
				   <h2 class="b-animate b-from-left    b-delay03 ">
					 <img src="/index/images/p_logo.png" class="img-responsive" alt=""/>
					 <span>CONSTRUCTORA 1</span>
					 <button>Ver galería</button>
					 <label> <i class="heart"> </i></label>
					</h2>
				</div>
			</a>
		</div>
        <div class="col_1_of_4 span_1_of_4">
	 	   <a href="#" class="b-link-stripe b-animate-go  thickbox">
			<img src="/index/images/galeria/6.png" class="img-responsive" alt=""/>
			    <div class="b-wrapper">
				   <h2 class="b-animate b-from-left    b-delay03 ">
					 <img src="/index/images/p_logo.png" class="img-responsive" alt=""/>
					 <span>CONSTRUCTORA 1</span>
					 <button>Ver galería</button>
					 <label> <i class="heart"> </i></label>
					</h2>
				</div>
			</a>
		</div>
        <div class="col_1_of_4 span_1_of_4">
	 	   <a href="#" class="b-link-stripe b-animate-go  thickbox">
			<img src="/index/images/galeria/7.png" class="img-responsive" alt=""/>
			    <div class="b-wrapper">
				   <h2 class="b-animate b-from-left    b-delay03 ">
					 <img src="/index/images/p_logo.png" class="img-responsive" alt=""/>
					 <span>CONSTRUCTORA 1</span>
					 <button>Ver galería</button>
					 <label> <i class="heart"> </i></label>
					</h2>
				</div>
			</a>
		</div>
        <div class="col_1_of_4 span_1_of_4">
	 	   <a href="#" class="b-link-stripe b-animate-go  thickbox">
			<img src="/index/images/galeria/8.png" class="img-responsive" alt=""/>
			    <div class="b-wrapper">
				   <h2 class="b-animate b-from-left    b-delay03 ">
					 <img src="/index/images/p_logo.png" class="img-responsive" alt=""/>
					 <span>CONSTRUCTORA 1</span>
					 <button>Ver galería</button>
					 <label> <i class="heart"> </i></label>
					</h2>
				</div>
			</a>
		</div>
		<div class="clearfix"> </div>
	</div>
	<div class="portfolio_box">
		<div class="col_1_of_4 span_1_of_4">
	 	   <a href="#" class="b-link-stripe b-animate-go  thickbox">
			<img src="/index/images/galeria/9.png" class="img-responsive" alt=""/>
			    <div class="b-wrapper">
				   <h2 class="b-animate b-from-left    b-delay03 ">
					 <img src="/index/images/p_logo.png" class="img-responsive" alt=""/>
					 <span>CONSTRUCTORA 1</span>
					 <button>Ver galería</button>
					 <label> <i class="heart"> </i></label>
					</h2>
				</div>
			</a>
		</div>
        <div class="col_1_of_4 span_1_of_4">
	 	   <a href="#" class="b-link-stripe b-animate-go  thickbox">
			<img src="/index/images/galeria/10.png" class="img-responsive" alt=""/>
			    <div class="b-wrapper">
				   <h2 class="b-animate b-from-left    b-delay03 ">
					 <img src="/index/images/p_logo.png" class="img-responsive" alt=""/>
					 <span>CONSTRUCTORA 1</span>
					 <button>Ver galería</button>
					 <label> <i class="heart"> </i></label>
					</h2>
				</div>
			</a>
		</div>
        <div class="col_1_of_4 span_1_of_4">
	 	   <a href="#" class="b-link-stripe b-animate-go  thickbox">
			<img src="/index/images/galeria/11.png" class="img-responsive" alt=""/>
			    <div class="b-wrapper">
				   <h2 class="b-animate b-from-left    b-delay03 ">
					 <img src="/index/images/p_logo.png" class="img-responsive" alt=""/>
					 <span>CONSTRUCTORA 1</span>
					 <button>Ver galería</button>
					 <label> <i class="heart"> </i></label>
					</h2>
				</div>
			</a>
		</div>
        <div class="col_1_of_4 span_1_of_4">
	 	   <a href="#" class="b-link-stripe b-animate-go  thickbox">
			<img src="/index/images/galeria/12.png" class="img-responsive" alt=""/>
			    <div class="b-wrapper">
				   <h2 class="b-animate b-from-left    b-delay03 ">
					 <img src="/index/images/p_logo.png" class="img-responsive" alt=""/>
					 <span>CONSTRUCTORA 1</span>
					 <button>Ver galería</button>
					 <label> <i class="heart"> </i></label>
					</h2>
				</div>
			</a>
		</div>
		<div class="clearfix"> </div>
	</div>
   </div>

   <!-- GALERIA -->
   
   
   
   
   


    <!-- ************* -->
    <div class="signup eventos">
    
    
    
   	  <div class="container">
            <div class="slider-left">
              <h1><img src="/index/images/Eventos.png" alt="Eventos"></h1><br>
            </div>
   	   <div class="row text-center">
   	    <div class="col-md-12 service_grid" style="background-color:#FFF; padding:20px;">

					<div style="width:100%; padding:10px">
		                            <div class="owl-carousel-eventos">
									@foreach ($eventos as $evento)

		                              <div>
		                                    <div class="row text-center">
		                                        <div class="col-md-12" style="background-color:#ffffff;">
		                                              <center><p><img src="images/eventos/{{$evento->imagen}} " alt="{{ $evento->titulo }}" class="img-thumbnail"></p></center>
		                                               <h3 class="m_1"><a href="#">{{$evento->titulo}}</a></h3>
		                                               <p class="m_2" style="text-align:center;">Fecha: {{Str::limit($evento->fecha,400)}}</p>
		                                              <p class="m_2" style="text-align:justify;">{{Str::limit($evento->contenido,400)}}</p>
		                                        </div>                              
		                                    </div>                          
		    						  </div>
									@endforeach
		                            </div>        
		            </div> 
	
   		</div>
   	  </div>
   	  </div>    

   	</div>
    <!-- ************* -->
   
   
   
   
   
   
   
<!-- ************* -->
   <div class="services clasificados" id="services">
			<div class="container">
		   	  	<h2 class="service_head" style="margin-bottom:0em"><img src="/index/images/Clasificados.png" alt="Eventos"></h2>
		        
		 		<div class="row text-center">
		   	    <div class="col-md-12 service_grid" style="padding:20px;">
		   		  		{{-- */$i=0;/* --}}
						@foreach ($categoriasClasif as $categoriaC)
							@if ($i==0)
								<div class="row">
							@endif
							
							<div class="col-md-3" align="left"  style="padding:20px; color:#FFF;"><a href="directorioClasif/{{ $categoriaC->id }}"><i class="fa {{ $categoriaC->icono }}"></i> {{ mb_strtoupper($categoriaC->categoria, 'utf-8') }}</a></div>
					
							
							{{-- */$i++;/* --}}

							@if ($i==4)
								</div>
								{{-- */$i=0;/* --}}
							@endif						
						@endforeach
						<br>
						<br>
						<br>
		   		</div>
		   	  </div>       
		        




		   	  </div>  
					<div style="width:100%; background-color:#ffb600;margin-bottom: 20px;">
		                            <div class="owl-carousel-clasificados">
									@foreach ($clasificadosvip as $clasf)

                              <div>
                                    <div class="row text-center">
                                        <div class="col-md-12 service_grid">
											  <a href="../clasificadoDetalle/{{$clasf->id}}">
                                              <p><img src="{{(($clasf->imagenes->isEmpty())?'/images/No_image_available.png': '/images/clasificados/'.$clasf->imagenes[0]->nombre_imagen)}}" alt="" class="img-thumbnail" style="width: 350px;height: 250px;"></p>
                                              <h3 class="m_1">{{$clasf->titulo}}</h3></a>
                                              <p class="m_2" style="text-align:justify;">{{Str::limit($clasf->descripcion,400)}}</p>
											  
                                        </div>                              
                                    </div>                          
    						  </div>
							@endforeach
		                            </div>        
		                </div>  			  
   </div>
    <!-- ************* -->

    
    
    
    
    
    
    
    
    
    
    
    <!-- ************* -->
   	<div class="signup s3" id="signup">
       <div class="container">
   			<h3 class="m_3">TE INTERESA INSCRIBIRTE? <br> ENVÍANOS TU DATOS</h3>
   			<div class="contact-form">
			   <form method="post" action="contact-post.html">
				 <input type="text" class="textbox" value="Nombre" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Nombre';}">
				 <input type="text" class="textbox" value="Apellidos" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Apellidos';}">
				 <input type="text" class="textbox" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
				 <input type="submit" value="Enviar">
			   </form>
			</div>
   		</div>
   	</div>
    <!-- ************* -->
    
    
    
    
    
    
    
    
    
    
    
    <!-- ************* -->
    <div class="about videoblog" id="about">
   		<div class="container">
   			<h3 class="m_4"><img src="/index/images/VideoBlog.png" alt="Eventos"></h3>
   			<p class="m_5">Descripción del videoblog</p>
   			<div class="row text-center">
                                                            <div class="row">
                                                                  <div class="col-lg-6">
                                                                  		<iframe width="100%" height="300" src="//www.youtube.com/embed/0b7zw-YjGqE?rel=0" frameborder="0" allowfullscreen></iframe>
                                                                  </div>
                                                                  <div class="col-lg-6">
                                                                  		<iframe width="100%" height="300" src="//www.youtube.com/embed/-cjMEnkeEhM?rel=0" frameborder="0" allowfullscreen></iframe>
                                                                  </div>                                                                  
                                                             </div> 
   			</div>
   		</div>
   	</div>
    <!-- ************* -->
    
    
    
    
    
    
    
    <!-- ************* -->
   	<div class="contact contacto" id="contacto">
   		<div class="container">
   			<div class="row">
   				<div class="col-md-8 contact_left">
   					<h3>QUEREMOS ESCUCHAR TUS COMENTARIOS</h3><br>
   					<ul class="contact_info">
			  	<li><i class="pin"> </i><span>Ensenada, Baja California, México</span></li>
			  	<li><i class="mobile"> </i><span>Tel: 01-800-345-765<br></span></li>
			  	<li><i class="message"> </i><span class="msg">info(arroba)todoconstruimos.com</span></li>
			  </ul>
   				</div>
   				<div class="col-md-4">
   					<div class="contact_right">
   				<div class="contact-form_grid">
				   <form method="post" action="contact-post.html">
					 <input type="text" class="textbox" value="Nombre" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Nombre';}">
					 <input type="text" class="textbox" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
					 <input type="text" class="textbox" value="Asunto" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Asunto';}">
					 <textarea value="Message:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Comentario';}">Comentario</textarea>
					 <input type="submit" value="Enviar">
				   </form>
			      </div>
   			     </div>
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

