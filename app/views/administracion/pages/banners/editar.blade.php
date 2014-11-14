<!DOCTYPE html>
<html>
    <head>
		@include('administracion.head')

<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

              <script>
              $(function() {
                $( "#fecha_evento" ).datepicker({ dateFormat: "yy-mm-dd" });
              });
              </script>
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





								<div class="container">

										<div class="hero-unit" style="margin-top:40px">
											{{ Form::open(array('url' => 'administracion/banners/guardarEdicion/'.$banner->id,'method'=>'put', 'files' => true)) }}
                                                            <h2>Modificar banner</h2>
										@if ($errors->has())
									<div style="background: rgba(242,222, 223,255); margin: 5px;padding-left: 10px; padding-right: 10px;border: 2px #dd9d9d solid;

									background-color: #F2DEDF;
									-webkit-border-radius: 8px;
									-moz-border-radius: 8px;
									border-radius: 8px;
									color: #a71b2a;
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
                                                            <hr/>
                                                            <div class="form-group">
                                                                    {{ Form::label('seccion', 'Elige la sección y ubicación del banner: ') }}
																	@if($errors->has())
																	{{ Form::select('seccion', array('BLOG-IZQUIERDA' => 'BLOG - IZQUIERDA', 'BLOG-DERECHA' => 'BLOG - DERECHA','DIRECTORIO-IZQUIERDA' => 'DIRECTORIO - IZQUIERDA', 'DIRECTORIO-DERECHA' => 'DIRECTORIO - DERECHA','EVENTOS-IZQUIERDA' => 'EVENTOS - IZQUIERDA', 'EVETNOS-DERECHA' => 'EVENTOS - DERECHA','CLASIFICADOS-IZQUIERDA' => 'CLASIFICADOS - IZQUIERDA', 'CLASIFICADOS-DERECHA' => 'CLASIFICADOS - DERECHA','VIDEOBLOG-IZQUIERDA' => 'VIDEOBLOG - IZQUIERDA', 'VIDEOBLOG-DERECHA' => 'VIDEOBLOG - DERECHA'),Input::old('seccion'),array('class' => 'form-control')) }}
																	@else
                                                                    {{ Form::select('seccion', array('BLOG-IZQUIERDA' => 'BLOG - IZQUIERDA', 'BLOG-DERECHA' => 'BLOG - DERECHA','DIRECTORIO-IZQUIERDA' => 'DIRECTORIO - IZQUIERDA', 'DIRECTORIO-DERECHA' => 'DIRECTORIO - DERECHA','EVENTOS-IZQUIERDA' => 'EVENTOS - IZQUIERDA', 'EVETNOS-DERECHA' => 'EVENTOS - DERECHA','CLASIFICADOS-IZQUIERDA' => 'CLASIFICADOS - IZQUIERDA', 'CLASIFICADOS-DERECHA' => 'CLASIFICADOS - DERECHA','VIDEOBLOG-IZQUIERDA' => 'VIDEOBLOG - IZQUIERDA', 'VIDEOBLOG-DERECHA' => 'VIDEOBLOG - DERECHA'),$banner->seccion,array('class' => 'form-control')) }}
																	@endif
                                                            </div> 
															<div class="form-group">
																{{ Form::label('link', 'Liga a página web') }}
																@if($errors->has())
																	{{ Form::text('link', Input::old('link'), array( 'placeholder' => '',  'class' => 'form-control')) }}
																@else
																	{{ Form::text('link', $banner->link, array( 'placeholder' => '',  'class' => 'form-control')) }}
																@endif
																
															</div>															
                                                            <hr>
                                                            <div class="form-group">
                                                                    {{ Form::label('imagen', 'Selecciona la imagen del banner') }}
                                                                    {{ Form::file('imagen',[]) }}
                                                            </div>   
															<div  style="border-color: aliceblue;border-width: 2px;background-color: beige;border-radius: 10px;padding: 10px;margin-bottom: 15px;">
																<div ><i class="fa fa-info-circle"></i><span style="font-size: smaller;font-weight: 700;margin-left: 5px;">Tamaños de imagenes</span></div>
																<div style="margin-left: 20px;font-size: smaller;">
																<span style="font-weight: 700;margin-right: 5px;">- Banners horizontales:</span> <span>400px de ancho por 170px de alto.</span><br>
																<span style="font-weight: 700;margin-right: 18px;">- Banners verticales:</span> <span>170px de ancho por 400px de alto.</span>
																</div>
															</div>															
                                                                <center><h3>Banner actual</h3></center>
                                                            <br>
                                                            <p align="center"><img src="/images/banners/{{$banner->banner_img}} " alt="{{ $banner->banner_img }}" class="img-thumbnail"></p>                                                                   
                                                            <div class="form-group">
                                                                <center>{{ Form::submit('Actualizar banner', array('class' => 'btn btn-success')) }}</center>
                                                            </div>
											{{ Form::close() }}
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