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
				
			});
			
			
			
			
			
			
		</script>
		<style type="text/css">
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
    color: #FCB200;
}

/* selected link */
a:active {
    color: #0000FF;
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
    
    <div style="width:100%; background-color:#FAFFBD; border-bottom: 5px solid #FAFFBD;border-top: 5px solid #FAFFBD">
		@include('index.include_logos')       
    </div>   
    
    
    
    
    
    
    
     <!-- MENU -->
	<nav class="subMenu navbar-custom navbar-scroll-top smint" role="navigation" style="position: absolute; top: 380px;">
		@include('index.include_menusubseccion')
   	</nav>
      <!-- MENU -->
      
   
   
   
  
  
  
  
    <!-- ************* -->
    <div class="" style="background-color:#2d2d2d;">
    
   	  <div style="width:100%;">
            <div class="slider-left;" style="width:100%; background-color:#FFB500; padding:10px;">
              <h1 align="center"><img src="/index/images/VideoBlog.png" alt="Eventos"></h1>
            </div>
   	   
   	   <div class="row text-center">
   	    

   	    <div class="col-md-2 service_grid" style="padding:20px">
			@include('index.include_bannerizq')
   		</div>
   	    

   	    <div class="col-md-8" style="padding:20px;">

   	    	
   	    		
							@foreach ($videoblog as $video)
							<div class="row">
                                <div  class="col-md-12" style="background:rgba(255,255,255,0.89);padding:20px; color:#000;">
	                                <iframe width="600px" height="300" src="//www.youtube.com/embed/{{$video->video}}?rel=0" frameborder="0" allowfullscreen></iframe>
	                                <br><h4>{{$video->titulo}}</h4><br>
	                                <p align="center">Publicado el: {{$video->fecha}}</p>
	                                <p align="justify">{{$video->contenido}}</p>
                                </div>
                            </div>&nbsp;
							@endforeach

   	    		<ul class="pagination">
   	    		<center><?php echo $videoblog->links(); ?></center>
   	    		</ul>


   	    		
   	    	
   	    	   	    		
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

