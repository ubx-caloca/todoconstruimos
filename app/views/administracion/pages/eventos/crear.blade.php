<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Todo Construimos | Dashboard</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="/administracion_files/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="/administracion_files/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="/administracion_files/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Morris chart -->
        <link href="/administracion_files/css/morris/morris.css" rel="stylesheet" type="text/css" />
        <!-- jvectormap -->
        <link href="/administracion_files/css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <!-- Date Picker -->
        <link href="/administracion_files/css/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
        <!-- Daterange picker -->
        <link href="/administracion_files/css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="/administracion_files/css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="/administracion_files/css/AdminLTE.css" rel="stylesheet" type="text/css" />

        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">


<script src="//code.jquery.com/jquery-1.10.2.js"></script>


        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

              <script>
              $(function() {
                $( "#fecha_evento" ).datepicker({ format: "yyyy-mm-dd" });
              });
              </script>


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





											<div class="container">

													<div class="hero-unit" style="margin-top:40px">
														{{ Form::open(array('url' => 'administracion/eventos/publicar', 'files' => true)) }}
															<h2>Nuevo evento</h2>
															<hr/>
															<div class="form-group">
																	{{ Form::label('titulo', 'Título') }}
																	{{ Form::text('titulo','', array( 'placeholder' => '',  'class' => 'form-control')) }}
															</div>	
															<hr>
															<div class="form-group">
																	{{ Form::label('fecha_evento', 'Fecha del evento') }}
																	{{ Form::text('fecha_evento','', array( 'placeholder' => '',  'class' => 'form-control')) }}
															</div>	
															<hr>
															<div class="form-group">
																	{{ Form::label('imagen', 'Selecciona una imagen') }}
																	{{ Form::file('imagen[]',['multiple' => true]) }}
															</div>					
															<hr>
															<textarea name="contenido" class="textarea" placeholder="Escribe el contenido" style="width: 810px; height: 200px"></textarea>
															<hr>
															<div class="form-group">
																<center>{{ Form::submit('Publicar evento', array('class' => 'btn btn-success')) }}</center>
															</div>
														{{ Form::close() }}
													</div>
											</div>



											<hr>


											   	  <div class="container">
											   	  	<center><h1><img src="/index/images/Eventos.png" alt="Eventos"></h1></center><br>
											   	   


																	@foreach ($Eventos as $evento)
																		<div class="row text-center">
																	   	    <div class="col-md-12 service_grid">
																	   		  <p><img src="/images/eventos/{{$evento->imagen}} " alt="{{ $evento->titulo }}" class="img-thumbnail"></p>
																	   		  <h3 class="m_1">{{$evento->titulo}}</h3>
																	   		  <p class="m_2" style="text-align:justify;"><center>Fecha del evento: {{ $evento->fecha_evento }}</center></p>
																	   		  <p class="m_2" style="text-align:justify;">{{ $evento->contenido }}</p>
																	          <p><br><a class="btn btn-default" href="<?php echo"/administracion/eventos/editar/$evento->id"; ?>" ><span>Editar</span></a> | <a class="btn btn-default" href="<?php echo"/administracion/eventos/borrar/$evento->id"; ?>" ><span>Borrar</span></a><br>___________________<br><br></p>
																	   		</div>
																	   	</div>
																			
																	@endforeach

																	<center><?php echo $Eventos->links(); ?></center>

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