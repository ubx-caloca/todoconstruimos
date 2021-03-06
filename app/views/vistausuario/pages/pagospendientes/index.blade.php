<!DOCTYPE html>
<html>
    <head>

            @include('vistausuario.head')
<style>
.formbutton{
margin-left: -12px;
white-space: normal;
padding-top: 4px;
padding-right: 8px;
padding-bottom: 4px;
padding-left: 8px;
font-weight: 600;
background-color: darkorange;
border-color: chocolate;
border-width: 2px;
color: chocolate;
}
.btn.btn-success {
background-color: gold;
border-color: chocolate;
}

.btn.btn-success:hover{
    background-color: orange;
}

.solpremimbutton {
-moz-box-shadow: inset 0px 1px 0px 0px #fce2c1;
-webkit-box-shadow: inset 0px 1px 0px 0px #fce2c1;
box-shadow: inset 0px 1px 0px 0px #fce2c1;
background: -webkit-gradient( linear, left top, left bottom, color-stop(0.05, #ffc477), color-stop(1, #fb9e25) );
background: -moz-linear-gradient( center top, #ffc477 5%, #fb9e25 100% );
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffc477', endColorstr='#fb9e25');
background-color: #ffc477;
-webkit-border-top-left-radius: 20px;
-moz-border-radius-topleft: 20px;
border-top-left-radius: 10px;
-webkit-border-top-right-radius: 20px;
-moz-border-radius-topright: 20px;
border-top-right-radius: 10px;
-webkit-border-bottom-right-radius: 20px;
-moz-border-radius-bottomright: 20px;
border-bottom-right-radius: 10px;
-webkit-border-bottom-left-radius: 20px;
-moz-border-radius-bottomleft: 20px;
border-bottom-left-radius: 10px;
text-indent: 0;
border: 1px solid #eeb44f;
display: inline-block;
color: #ffffff;
font-weight: bold;
font-style: normal;
/* height: 65px; */
text-decoration: none;
text-align: center;
text-shadow: 1px 1px 0px #cc9f52;
margin-left: -20px;
margin-right: -10px;
}

.solpremimbutton:hover {
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #fb9e25), color-stop(1, #ffc477) );
	background:-moz-linear-gradient( center top, #fb9e25 5%, #ffc477 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#fb9e25', endColorstr='#ffc477');
	background-color:#fb9e25;
}.solpremimbutton:active {
	position:relative;
	top:1px;
}

.solpremimenviadabutton {
-moz-box-shadow: inset 0px 1px 0px 0px #ffffff;
-webkit-box-shadow: inset 0px 1px 0px 0px #ffffff;
box-shadow: inset 0px 1px 0px 0px #ffffff;
background: -webkit-gradient( linear, left top, left bottom, color-stop(0.05, #f9f9f9), color-stop(1, #e9e9e9) );
background: -moz-linear-gradient( center top, #f9f9f9 5%, #e9e9e9 100% );
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f9f9f9', endColorstr='#e9e9e9');
background-color: #f9f9f9;
-webkit-border-top-left-radius: 20px;
-moz-border-radius-topleft: 20px;
border-top-left-radius: 10px;
-webkit-border-top-right-radius: 20px;
-moz-border-radius-topright: 20px;
border-top-right-radius: 10px;
-webkit-border-bottom-right-radius: 20px;
-moz-border-radius-bottomright: 20px;
border-bottom-right-radius: 10px;
-webkit-border-bottom-left-radius: 20px;
-moz-border-radius-bottomleft: 20px;
border-bottom-left-radius: 10px;
text-indent: 0;
border: 1px solid #dcdcdc;
display: inline-block;
color: #666666;
font-weight: bold;
font-style: normal;
height: 65px;
text-decoration: none;
text-align: center;
text-shadow: 1px 1px 0px #ffffff;
margin-left: -20px;
margin-right: -10px;
}
.solpremimenviadabutton:hover {
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #e9e9e9), color-stop(1, #f9f9f9) );
	background:-moz-linear-gradient( center top, #e9e9e9 5%, #f9f9f9 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#e9e9e9', endColorstr='#f9f9f9');
	background-color:#e9e9e9;
}.solpremimenviadabutton:active {
	position:relative;
	top:1px;
}


</style>
    </head>
    <body class="skin-blue">
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
                    







                    @include('vistausuario.topbar')





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
                            @include('vistausuario.userpanel')
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



                            @include('vistausuario.menu')




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
                        <small style="color: black;font-weight: 400;">Vista del usuario</small>
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
									    <h3 class="panel-title">LISTA DE PAGOS PENDIENTES</h3>
									  </div>

									  <div class="panel-body">
											<div class="container" style="width:auto">
											    <?php foreach ($listaPagosPendientes as $pagop): ?>
											    	<div class="row">
											    		<div class="col-md-1">
															<center><strong>Id</strong></center>
											        		<center style="padding-bottom: 15px;">{{$pagop->id}}</center>

@if($pagop->referenciaPago == null || $pagop->referenciaPago=='')															
 <center style="margin-top: 40px;"><form method="get" action="pagospendmeterdatos/{{$pagop->id}}">
    <button class="solpremimbutton" type="submit">Meter datos de pago</button>
</form> </center>
@else
 <center style="margin-top: 40px;"><form method="get" action="pagospendmodifdatos/{{$pagop->id}}">
    <button class="solpremimenviadabutton" type="submit">Cambiar datos de pago</button>
</form> </center>
@endif									
											        	</div>
																							<?php
											$fecPubString = $pagop->fecha;
											$utc_date = new DateTime(
									                $fecPubString, 
									                new DateTimeZone('UTC')
									);

									$tj_date = $utc_date;
									$tj_date->setTimeZone(new DateTimeZone('America/Tijuana'));
									?>
											    		<div class="col-md-11">
											        		<p><strong>Tipo:</strong> {{$pagop->cobro->tipo->descripcion }}</p>
															<p><strong>Objeto de pago:</strong> Id: {{ $pagop->cobro->datosAdicionales }}</p>
															<p><strong>Vigencia extendida por:</strong> {{ $pagop->cobro->tipo->diasVigencia }} días</p>
															<p><strong>Precio a pagar:</strong> {{ number_format (  $pagop->cobro->tipo->precio , 2 ,  '.' , ',' ). ' pesos'}}</p>
											        		<p><strong>Pendiente desde:</strong> {{ date_format($tj_date, 'd M Y H:i a')  }}</p>
															<!--<p><strong>Concepto:</strong> {{ $pagop->cobro_concepto }}</p>-->
														</div>
											        </div>
											        <hr>
											    <?php endforeach; ?>
											</div>

											<center><?php echo $listaPagosPendientes->links(); ?></center>
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