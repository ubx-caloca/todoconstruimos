<!DOCTYPE html>
<html>
    <head>

            @include('administracion.head')

    </head>
    <body class="skin-black">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="index.html" class="logo">
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
                        <small>Administración del sistema</small>
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
											        		<center><?php echo "$numeroClasificado"; $numeroClasificado++;?></center>
											        	</div>
											    		<div class="col-md-11">
											        		<p><strong>Título:</strong> {{ $clasificado->titulo }}</p>
											        		<p><strong>Categoria:</strong> {{ $clasificado->categoria->categoria }}</p>
											        		<p><strong>Descripción:</strong><br> <textarea readonly style="width:100%">{{ $clasificado->descripcion }} </textarea></p
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
															<p><strong>Premium:</strong> {{ (($clasificado->premium>0)?'Si': 'No') }}</p>
															<p><strong>Habilitado:</strong> {{ (($clasificado->habilitar > 0)?'Si':'No') }}</p>
															<p><strong>Precio:</strong> {{ ''.$clasificado->precio.' '.$clasificado->moneda}}</p>
															<!--
											        		<p><strong><a href=" <?php echo"/administracion/clasificados/galeria/$clasificado->id"; ?> ">Agregar fotos a clasificado</a></strong></p>
															-->
															<p><strong>Imagenes:</strong></p>
															<div style="width:100%; background-color:#ffffff; border-top: 7px solid #ffffff; border-bottom: 7px solid #ffffff;">
															    <div >
															<!--
									                            <div class="owl-carousel">
																-->
																 @foreach ($clasificado->imagenes as $img)		
									                              <div> <img src="/images/clasificados/{{$img->nombre_imagen}}" alt=""  class="img-thumbnail" style="width: 150px;height: 100px;"/> </div>
																  @endforeach
									                            </div>        
															</div> 
											        		<p><strong><a href=" <?php echo"/administracion/clasificados/$clasificado->id/edit"; ?> ">Editar</a></strong></p>
															<p>
																{{ Form::open(array('url' => '/administracion/clasificados/' . $clasificado->id, 'class' => 'pull-left')) }}
														{{ Form::hidden('_method', 'DELETE') }}
														<strong><a href="#" onclick="$(this).closest('form').submit()">Eliminar</a></strong>
														{{ Form::close() }}
															</p>
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