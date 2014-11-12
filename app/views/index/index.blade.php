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
<script src="/index/js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="/index/css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->


<!-- content to be placed inside <body>…</body> -->
<link href='http://fonts.googleapis.com/css?family=Cutive' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>

<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,500,700,900' rel='stylesheet' type='text/css'>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<script src="/index/js/owl.carousel.2.0.0-beta.2.4/owl.carousel.js"></script>
<link rel="stylesheet" type="text/css" href="/index/js/owl.carousel.2.0.0-beta.2.4/assets/owl.carousel.css">
<script src="/index/js/easing.js"></script>
	<script type="text/javascript" 	src="/index/js/jquery.smint.js"></script>
		<script type="text/javascript">


			$(document).ready( function() {
				  if(window.location.hash) {
				      var hash = window.location.hash.substring(1); //Puts hash in variable, and removes the # character
				      window.location.hash = hash;

				      //alert (hash);
				      // hash found
				  } else {
				      //$(window).scrollTop(0);
				      //stickyTop = 0;
				  }					
			    $('.subMenu').smint({
			    	'scrollSpeed' : 1000,
			    });

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
					margin:40,
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


.class1 A:link {text-decoration: none;color: #191919;}
.class1 A:visited {text-decoration: none;color: #191919;}
.class1 A:active {text-decoration: none;color: #191919;}
.class1 A:hover {text-decoration: underline;color: #191919;}
A.signuplink:hover {color: #FCB200;}

A.coolbutton{color: #FCB200;}

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


@if( Session::has('modal_message_error'))
		<script type="text/javascript">
		    $(window).load(function(){
        $('#myModal').modal('show');
		});
		</script>
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" onload="loadMessage()"> 
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Mensaje de información</h4>
              </div>
              <div class="modal-body">
               {{ Session::get('modal_message_error') }}
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              </div>
            </div>
          </div>
        </div>
@endif



	<!-- ENCABEZADO -->
	<div class="header sTop hidden-xs">
			<div class="socialtop">	
		      <ul>	
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
    
    
    
    
    
                 <div style="width:100%; background-color:#ffffff; border-bottom: 5px solid #ffffff;margin-top: -5px;border-top: 5px solid #ffffff">
						@include('index.include_logos')       
                </div>   
    
    
    
    
    
    
    
     <!-- MENU -->
	<div class="subMenu navbar-custom navbar-scroll-top smint" role="navigation" style="position: absolute; top: 380px;">
		@include('index.include_menu')
   	</div>
      <!-- MENU -->
      
   
   
   
  
  
  
  
     <!-- ************* -->
   <a name="blogescrito"></a>
   <div class="blogescrito" id="blogescrito">
   	  <div class="container">
   	  	<center><h1><img src="/index/images/Blog.png" alt="Eventos"></h1></center><br>
   	   <div class="row text-center">


						@foreach ($blog as $post)

					   	    <div class="col-md-3 service_grid">
					   		  <p><img src="images/blog/{{$post->imagen}} " alt="{{ $post->titulo }}" class="img-thumbnail"></p>
					   		  <h3 class="m_1"><a href="#">{{$post->titulo}}</a></h3>
					   		  <p class="m_2" style="text-align:justify;"><?php  echo Str::limit(strip_tags($post->contenido), 400); ?></p>
					   		  <span class="class1"><p align="right"><br><a href="/blog/{{$post->id}}" target="_self"><span><i class="fa fa-plus-circle"></i> Leer más...</span></a></p></span>
					   		</div>

								
						@endforeach



   	  </div>

<br>
			<div style="width:100%; background-color:#eaa600; color:#fff; padding:10px;">

					<center>
						<a class="btn btn-default" href="/blog/" target="_self"> <i class="fa fa-share"></i> Entrar al blog </a>
					</center>

			</div>

   	  </div>
   	</div>
    <!-- ************* -->
   
   




    <!-- ************* -->
    <a name="directorio"></a>
    <div class="signup directorio">
    
    
    
   	  <div class="container">
            <div class="slider-left">
              <h1><img src="/index/images/Directorio.png" alt="Eventos"></h1>
            </div>
   	   <div class="row text-center">
   	    <div class="col-md-12 service_grid" style="padding:20px;">
					<nav>
						<ul>   		  		
				@foreach ($categorias as $categoria)
					
					<li><a href="directorio/{{ $categoria->tipo }}" style="font-size:13px;"><i class="fa {{ $categoria->icono }}" style="color:#FFB500; font-size:13px;"></i> {{ $categoria->tipo }}</a></li>
					
				@endforeach
						</ul>
					</nav>

   		</div>
   	  </div>
   	  </div>    

   	</div>
    <!-- ************* -->
   
      
      
     
      <!-- GALERIA -->
      <div class="portfolio galeria" id="portfolio">
            <div class="slider-left" style="background-color:#282828;"><br><br><br>
              <center><h1><img src="/index/images/Galeria.png" alt="Eventos"></h1></center>
              <br>
            </div>       
		  <div class="portfolio_box" style="background-color:#282828;">


		  	@foreach ($galeriapremium as $foto)
		  		<?php 
		  			$nombreDeUsuario  = $foto->proveedor->nombre_usuario;
		  			$nombre  = $foto->proveedor->nombre;
		  		?>
				<div class="col_1_of_4 span_1_of_4">
			 	   <a href="/proveedores/{{$nombreDeUsuario}}#work" class="b-link-stripe b-animate-go  thickbox">
					<?php echo "<img src=\"/images/proveedores/$nombreDeUsuario/galeria/$foto->imagen\" class=\"img-responsive\" alt=\"\"/>"; ?>
					    <div class="b-wrapper">
						    <h2 class="b-animate b-from-left    b-delay03 ">
							 <img src="/index/images/p_logo.png" class="img-responsive" alt=""/>
							 <span><?php echo strtoupper($nombre); ?></span>
							 <button >Ver galería</button>
							</h2>
						</div>
					</a>
				</div>		  	
		  	@endforeach




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
   	   <div class="row">
   	    <div class="col-md-12 service_grid" style="background-color:#FFF; padding:20px;">

					<div style="width:100%; padding:10px">
		                            <div class="owl-carousel-eventos">
									@foreach ($eventos as $evento)

		                              <div>
		                                    <div class="row">
		                                        <div class="col-md-12" style="background-color:#ffffff;text-align:left;">
		                                              <p><img src="images/eventos/{{$evento->imagen}} " alt="{{ $evento->titulo }}" class="img-thumbnail"></p>
		                                               <h3 class="m_1" style="text-align:center;"><a href="#">{{$evento->titulo}}</a></h3>
		                                               <p class="m_2" style="text-align:center;">Fecha: {{Str::limit($evento->fecha,400)}}</p>
		                                              <p class="m_2" style="text-align:justify;">{{$evento->contenido}}</p>
		                                        </div>                              
		                                    </div>                          
		    						  </div>
									@endforeach
		                            </div>        
		            </div> 

	
   		</div>
		
   	  </div>
			<div style="width:100%; color:#fff; padding:10px;">

					<center>
						<a class="btn btn-default" href="/eventos/" target="_self"> <i class="fa fa-share"></i> Ver eventos </a>
					</center>

			</div>
   	  </div>    

   	</div>
    <!-- ************* -->
   
   


   
   
   
<!-- ************* -->
   <div class="services clasificados" id="services">
			<div class="container">
		   	  	<h2 class="service_head" style="margin-bottom:0em"><img src="/index/images/Clasificados.png" alt="Eventos"></h2>
		        
		 		<div class="row text-center">
		   	    <div class="col-md-12 service_grid" style="padding:10px;">

		   	    	<div style="width:100%; margin:0 auto; background-color:#eaa600;">
						<nav>
							<ul>   		  			   		  		
						@foreach ($categoriasClasif as $categoriaC)

							
							<li><a href="directorioClasif/{{ $categoriaC->id }}"style="font-size:13px;"><i class="fa {{ $categoriaC->icono }}" style="color:#FFB500; font-size:13px;"></i> {{ mb_strtoupper($categoriaC->categoria, 'utf-8') }}</a></li>

				
						@endforeach
							<li><a href="directorioClasif/all"style="font-size:13px;"><i class="fa fa-bars" style="color:#FFB500; font-size:13px;"></i> {{ mb_strtoupper('Todos', 'utf-8')}}</a></li>
							</ul>
						</nav>							

					</div>	

		   		</div>
		   	  </div>       
		        




		   	  </div>

					<div style="width:90%; margin:0 auto;">
		                <div class="owl-carousel-clasificados">
							@foreach ($clasificadosvip as $clasf)
	                            <div align="center">
									<span class="class1"><a href="../clasificadoDetalle/{{$clasf->id}}">
		                                <p><img src="{{(($clasf->imagenes->isEmpty())?'/images/No_image_available.png': '/images/clasificados/'.$clasf->imagenes[0]->nombre_imagen)}}" alt="" class="img-thumbnail" style="width: 350px;height: 250px;"></p>
								   		<h3 class="m_1">{{$clasf->titulo}}</h3>
	                                </a>
	                                </span>
	                                <p class="m_2" style="text-align:justify; color:#000;">{{Str::limit($clasf->descripcion,400)}}</p>
	    						</div>
							@endforeach
		                </div>        
		            </div>  			  
   </div>
    <!-- ************* -->
    
    <!-- ************* -->
    <div class="about videoblog" id="about" style="background-color:#e09f00;">
   		<div class="container">
   			<h3 class="m_4"><img src="/index/images/VideoBlog.png" alt="Eventos"></h3>
   			<div class="row">

							@foreach ($videoblog as $video)
                                <div class="col-lg-6">
	                                <iframe width="100%" height="300" src="//www.youtube.com/embed/{{$video->video}}?rel=0" frameborder="0" allowfullscreen></iframe>
	                                <center><h3 class="m_1">{{$video->titulo}}</h3></center>
	                                <p class="m_2" align="right">Publicado el: {{$video->fecha}}</p><br>
	                                <p class="m_2"  align="justify">{{$video->contenido}}</p>
                                </div>
							@endforeach


   			</div>

		<br>
		<br>
		<hr>
					<center>
						<a class="btn btn-default" href="/videoblog/" target="_self"> <i class="fa fa-share"></i> Ver más videos </a>
					</center>

   			
   		</div>
   	</div>
    <!-- ************* -->
    
    
    
    
    
    
    
    <!-- ************* -->
   	<div class="contact contacto" id="contacto">
   		<div class="container">
   			<div class="row">
   				<div class="col-md-6 contact_left">
   					<h3>QUEREMOS ESCUCHAR TUS COMENTARIOS</h3><br>
   					<ul class="contact_info">
			  	<li><i class="pin"> </i><span>Ensenada, Baja California, México</span></li>
			  	<li><i class="mobile"> </i><span>Tel: (646) 194 83 44<br></span></li>
			  	<li><i class="message"> </i><span class="msg">valenzueladagnino@todoconstruimos.com</span></li>
			  </ul>
   				</div>





   				<div class="col-md-6">
   					<div class="contact_right">
   				<div class="contact-form_grid">
				   <form method="post" action="/txcomentario">
					 <input Name="ComentarioNombre" type="text" class="textbox" value="Nombre" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Nombre';}">
					 <input Name="ComentarioEmail" type="text" class="textbox" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
					 <input type="text" Name="ComentarioAsunto" class="textbox" value="Asunto" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Asunto';}">
					 <textarea Name="ComentarioContenido" value="Message:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Comentario';}">Comentario</textarea>
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
   		@include('index.include_footer')
   	</div>
    <!-- ************* -->

    

</body>
</html>

