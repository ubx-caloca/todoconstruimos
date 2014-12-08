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


	<!-- ENCABEZADO -->
	<div class="header sTop hidden-xs">

		
		<div class="logo">
			<a href="/"><img src="/index/images/logoTodoConstruimos.png" alt=""/></a>
		</div>
	    <div class="slider_container" style="height: 150px;">
        
                <div class="wmuSlider example1 ">
                
                
                

                
                
                       <div class="wmuSliderWrapper">
                       		<article style="position: absolute; width: 100%; opacity: 0;"> 
                             <div class="banner-wrap">
                                 <div class="slider-left">
                                    <h2></h2>
                                    <p class="top_desc" style="padding-top: 5px;">{{mb_strtoupper('LA PÁGINA DE LA CONSTRUCCIÓN EN ENSENADA', 'utf-8')}}</p>
                                    <p class="bottom_desc">NOVIEMBRE DEL 2014, &nbsp;&nbsp; PROXIMAMENTE...  </p>
                                 </div>
                             </div>
                            </article>
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
    
    
    
  
    
    
   
   
  
  
  
  
     <!-- ************* -->
   <a name="blogescrito"></a>
   <div class="blogescrito" id="blogescrito" style="padding: 2em 0;">
   	  <div class="container">
	  <div class="row text-center" style="margin-bottom: 40px;">
	  <div class="col-md-12 service_grid">
	  <h1 style="text-align: -webkit-left;">Un vistazo previo...</h1>
	  </div>
	  </div>
	  
   	   <div class="row text-center" style="margin-bottom: 40px;">


						
							<div class="col-md-1"></div>
					   	    <div class="col-md-10 service_grid">
					   		  <img src="/images/proximamente/prox_img1.png" alt="" class="img-responsive" style="border-radius: 10px;">
							  <center> Screenshoot 1 </center>
					   		</div>
							<div class="col-md-1"></div>


   	  </div>
   	  <div class="row text-center" style="margin-bottom: 40px;">


						
							<div class="col-md-1"></div>
					   	    <div class="col-md-10 service_grid">
					   		  <img src="/images/proximamente/prox_img2.png" alt="" class="img-responsive" style="border-radius: 10px;">
							  <center> Screenshoot 2 </center>
					   		</div>
							<div class="col-md-1"></div>


   	  </div>
   	  <div class="row text-center" style="margin-bottom: 40px;">


						
							<div class="col-md-1"></div>
					   	    <div class="col-md-10 service_grid">
					   		  <img src="/images/proximamente/prox_img3.png" alt="" class="img-responsive" style="border-radius: 10px;">
							  <center> Screenshoot 3 </center>

					   		</div>
							<div class="col-md-1"></div>


   	  </div>
   	  <div class="row text-center" style="margin-bottom: 40px;">


						
							<div class="col-md-1"></div>
					   	    <div class="col-md-10 service_grid">
					   		  <img src="/images/proximamente/prox_img4.png" alt="" class="img-responsive" style="border-radius: 10px;">
							  <center> Screenshoot 4 </center>
					   		</div>
							<div class="col-md-1"></div>


   	  </div>

	  
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

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-56776636-1', 'auto');
  ga('send', 'pageview');

</script>    

</body>
</html>

