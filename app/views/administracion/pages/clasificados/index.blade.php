<!DOCTYPE html>
<html>
    <head>

            @include('administracion.head')
<script src="/index/js/jquery.min.js"></script>
<style>
/**** Slider *****/
.slider_container{
	width:100%;
	margin:0 auto;
}
.banner-wrap {
	width: 70%;
	margin: 0 auto;
}
/**** Slider *****/
.wmuSlider {
	position: relative;
	overflow: hidden;
}
.wmuSlider.example1 {
	height:210px !important
}
.wmuSlider .wmuSliderWrapper article {
	text-align: center;
}
.wmuSlider .wmuSliderWrapper article img {
	max-width: 100%;
	width: auto;
	height: auto;
	display:block;
}
/* Default Skin */
.wmuSliderPagination {
	z-index: 2;
	position: absolute;
	left: 48em;
	bottom:1em;
	padding: 0;
}
.wmuSliderPagination li {
	float: left;
	margin: 0 6px 0 0;
	list-style-type: none;
}
.wmuSliderPagination a {
	display: block;
	text-indent: -9999px;
	width: 13px;
	height: 13px;
	background:none;
	border: 1px solid #787575;
	border-radius: 1em;
	-webkit-border-radius: 1em;
	-moz-border-radius: 1em;
	-o-border-radius: 1em;
}
.wmuSliderPagination a.wmuActive {
	background:#ffb500;
}
/* Default Skin */
.wmuGallery .wmuGalleryImage {
	margin-bottom: 10px;
}
.wmuSliderPrev, .wmuSliderNext {
	position: absolute;
	width: 70px;
	height: 70px;
	text-indent: -9999px;
	background: url(../images/img-sprite.png)no-repeat;
	top:5%;
	z-index: 2;
	cursor: pointer;
}
.wmuSliderPrev {
	background-position: -13px -8px;
	left: 0px;
}
.wmuSliderNext {
	background-position:-83px -8px;
	right: 0px;
}

#clasfSlider a{
	top:30%;
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

    </head>
    <body class="skin-black">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="/" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                Todo Construimos
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    







                    @include('administracion.topbar')





                    </ul>
                </div>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                            @include('administracion.userpanel')
                    </div>


                        <!-- 
                        *****************************************************
                        *****************************************************
                        M  E  N  U
                        *****************************************************
                        *****************************************************
                        -->

                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">



                            @include('administracion.menu')




                    </ul>


                </section>
                <!-- /.sidebar -->
            </aside>





















            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Dashboard
                        <small style="color: black;font-weight: 400;">Administración del sistema</small>
                    </h1>
                </section>

                <!-- Main content -->
                <section class="content">











                    <!-- Main row -->
                    <div class="row">
                        <!-- Left col -->
                        <section class="col-lg-7 connectedSortable">                            





									<?php
										$numeroClasificado = 1;
										setlocale(LC_ALL,"es_ES");
										$dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
										$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
									?>

									<div class="container">
									<div class="panel panel-default">

									  <div class="panel-heading">
									    <h3 class="panel-title">LISTA DE CLASIFICADOS</h3>
									  </div>

									  <div class="panel-body">
											<div class="container" style="width:auto">
											    <?php foreach ($listaDeClasificados as $clasificado): ?>
											    	<div class="row">
											    		<div class="col-md-1">
															<center><strong>Id</strong></center>
											        		<center style="padding-bottom: 15px;">{{$clasificado->id}}</center>
															<center><strong><a href=" <?php echo"/administracion/clasificados/$clasificado->id/edit"; ?> ">Editar</a></strong></center>
															<center>
															{{ Form::open(array('url' => '/administracion/clasificados/' . $clasificado->id, 'class' => 'pull-left')) }}
															{{ Form::hidden('_method', 'DELETE') }}
															<strong><a href="#" onclick="$(this).closest('form').submit()">Eliminar</a></strong>
															{{ Form::close() }}
															</center>
											        	</div>
											    		<div class="col-md-11">
											        		<p><strong>Título:</strong> {{ $clasificado->titulo }}</p>
											        		<p><strong>Categoria:</strong> {{ $clasificado->categoria->categoria }}</p>
											        		<p><strong>Descripción:</strong><br> <textarea readonly rows="5" style="width:100%">{{ $clasificado->descripcion }} </textarea></p>
									<?php
											$fecPubString = $clasificado->fecha_publicacion;
											$utc_date = new DateTime(
									                $fecPubString, 
									                new DateTimeZone('UTC')
									);

									$tj_date = $utc_date;
									$tj_date->setTimeZone(new DateTimeZone('America/Tijuana'));
									?>
															
															<p><strong>Fecha de publicación:</strong> {{ date_format($tj_date, 'd M Y H:i a') }}</p>
															<p><strong>Usuario:</strong> {{ $clasificado->usuario->nombre }}</p>
															<p><strong>Premium:</strong> {{ (($clasificado->premium>0)?'Si': 'No') }}</p>
															<p><strong>Habilitado:</strong> {{ (($clasificado->habilitar > 0)?'Si':'No') }}</p>
															<p><strong>Precio:</strong> {{ ''.number_format ( $clasificado->precio , 2 ,  '.' , ',' ).' '.$clasificado->moneda}}</p>
															<p><strong>Localización:</strong> {{ '('.$clasificado->latitud.', '.$clasificado->longitud.')'}}</p>
															<!--
											        		<p><strong><a href=" <?php echo"/administracion/clasificados/galeria/$clasificado->id"; ?> ">Agregar fotos a clasificado</a></strong></p>
															-->
															<p><strong>Imagenes:</strong></p>
															
															<div class="row">
															<div class="col-md-3">
															</div>
															<div class="col-md-6">
															
															<div class="slider_container" style="padding-right: 15px;">
															<div id="clasfSlider" class="wmuSlider example2 ">
																<div class="wmuSliderWrapper" >
																@foreach ($clasificado->imagenes as $img)
																	<article style="position: absolute; width: 100%; opacity: 0;"> 
																		<center><img src="/images/clasificados/{{$img->nombre_imagen}}" alt=""  style="height:200px" ></center>
																	</article>
																@endforeach				
																</div>                        
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
															<div class="col-md-3">
															</div>
															</div>
		
											        	</div>
											        </div>
											        <hr>
											    <?php endforeach; ?>
											</div>

											<center><?php echo $listaDeClasificados->links(); ?></center>
									  </div>
									</div>
									</div>	







                        </section><!-- /.Left col -->
 
                    </div><!-- /.row (main row) -->











                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        <!-- add new calendar event modal -->


        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- jQuery UI 1.10.3 -->
        <script src="/administracion_files/js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="/administracion_files/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- Morris.js charts -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="/administracion_files/js/plugins/morris/morris.min.js" type="text/javascript"></script>
        <!-- Sparkline -->
        <script src="/administracion_files/js/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
        <!-- jvectormap -->
        <script src="/administracion_files/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
        <script src="/administracion_files/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
        <!-- jQuery Knob Chart -->
        <script src="/administracion_files/js/plugins/jqueryKnob/jquery.knob.js" type="text/javascript"></script>
        <!-- daterangepicker -->
        <script src="/administracion_files/js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
        <!-- datepicker -->
        <script src="/administracion_files/js/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="/administracion_files/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
        <!-- iCheck -->
        <script src="/administracion_files/js/plugins/iCheck/icheck.min.js" type="text/javascript"></script>

        <!-- AdminLTE App -->
        <script src="/administracion_files/js/AdminLTE/app.js" type="text/javascript"></script>

        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="/administracion_files/js/AdminLTE/dashboard.js" type="text/javascript"></script>

        <!-- AdminLTE for demo purposes -->
        <script src="/administracion_files/js/AdminLTE/demo.js" type="text/javascript"></script>

    </body>
</html>