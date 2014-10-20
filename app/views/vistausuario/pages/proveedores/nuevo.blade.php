<!DOCTYPE html>
<html>
    <head>

            @include('vistausuario.head')

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





                                <div class="container">
                                <div class="panel panel-default">

                                  <div class="panel-heading">
                                    <h3 class="panel-title">Agregar datos de proveedor</h3>
                                  </div>
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
                                  <div class="panel-body">
                                    {{ Form::open(array('url' => 'vistausuario/proveedor', 'files' => true)) }}
                                        <hr>
                                        <center><h4>Datos generales del proveedor</h4></center>
                                        <hr>
                                        <div class="form-group">
                                                {{ Form::label('proveedor_tipo', 'Tipo de proveedor') }}
                                                {{ Form::select('proveedor_tipo', $listaTiposDeProveedores , Input::old('proveedor_tipo'), array( 'placeholder' => '',  'class' => 'form-control')) }}
                                        </div>
                                        <div class="form-group">
                                                {{ Form::label('nombre_usuario', 'Nombre de usuario (ATENCIÓN: Este campo no podrá cambiarse después)') }}
                                                {{ Form::text('nombre_usuario',Input::old('nombre_usuario'), array( 'placeholder' => '',  'class' => 'form-control')) }}
                                        </div>
                                        <div class="form-group">
                                                {{ Form::label('nombre', 'Nombre') }}
                                                {{ Form::text('nombre',Input::old('nombre'), array( 'placeholder' => '',  'class' => 'form-control')) }}
                                        </div>
                                        <div class="form-group">
                                                {{ Form::label('direccion', 'Dirección') }}
                                                {{ Form::text('direccion',Input::old('direccion'), array( 'placeholder' => '',  'class' => 'form-control')) }}
                                        </div>
                                        <div class="form-group">
                                                {{ Form::label('telefono', 'Telefono') }}
                                                {{ Form::text('telefono',Input::old('telefono'), array( 'placeholder' => '',  'class' => 'form-control')) }}
                                        </div>
                                        <div class="form-group">
                                                {{ Form::label('facebook', 'Página de Facebook') }}
                                                {{ Form::text('facebook',Input::old('facebook'), array( 'placeholder' => '',  'class' => 'form-control')) }}
                                        </div>
                                        <div class="form-group">
                                                {{ Form::label('twitter', 'Página de Twitter') }}
                                                {{ Form::text('twitter',Input::old('twitter'), array( 'placeholder' => '',  'class' => 'form-control')) }}
                                        </div>
                                        <div class="form-group">
                                                {{ Form::label('otro_sns', 'Otra red social') }}
                                                {{ Form::text('otro_sns',Input::old('otro_sns'), array( 'placeholder' => '',  'class' => 'form-control')) }}
                                        </div>
                                        <hr>
                                        <center><h4>Coordenadas de la ubicación geográfica</h4></center>
                                        <hr>
                                        <div class="form-group">
                                                {{ Form::label('longitud', 'Longitud') }}
                                                {{ Form::text('longitud',Input::old('longitud'), array( 'placeholder' => '',  'class' => 'form-control')) }}
                                        </div>
                                        <div class="form-group">
                                                {{ Form::label('latitud', 'Latitud') }}
                                                {{ Form::text('latitud',Input::old('latitud'), array( 'placeholder' => '',  'class' => 'form-control')) }}
                                        </div>
                                        <hr>
                                        <center><h4>Detalles del proveedor</h4></center>
                                        <hr>
                                        <div class="form-group">
                                                {{ Form::label('introduccion', 'Introducción') }}
                                                {{ Form::text('introduccion',Input::old('introduccion'), array( 'placeholder' => '',  'class' => 'form-control')) }}
                                        </div>
                                        <div class="form-group">
                                                {{ Form::label('descripcion', 'Descripción') }}
                                                {{ Form::text('descripcion',Input::old('descripcion'), array( 'placeholder' => '',  'class' => 'form-control')) }}
                                        </div>
                                        <div class="form-group">
                                                {{ Form::label('vision', 'Visión') }}
                                                {{ Form::text('vision',Input::old('vision'), array( 'placeholder' => '',  'class' => 'form-control')) }}
                                        </div>
                                        <div class="form-group">
                                                {{ Form::label('productos', 'Productos') }}
                                                {{ Form::text('productos',Input::old('productos'), array( 'placeholder' => '',  'class' => 'form-control')) }}
                                        </div>
                                        <hr>
                                        <center><h4>Imagenes de fondo</h4></center>
                                        <hr>
                                        <div class="form-group">
                                                {{ Form::label('imagen_intro', 'Imagen de la sección de Introducción') }}
                                                {{ Form::file('imagen_intro',[]) }}
                                        </div>
                                        <div class="form-group">
                                                {{ Form::label('imagen_descripcion', 'Imagen de la sección de Descripción') }}
                                                {{ Form::file('imagen_descripcion',[]) }}
                                        </div>
                                        <div class="form-group">
                                                {{ Form::label('imagen_vision', 'Imagen de la sección de Visión') }}
                                                {{ Form::file('imagen_vision',[]) }}
                                        </div>
                                        <hr>
                                        <div class="form-group">
                                                <center>{{ Form::submit('Agregar datos de proveedor', array('class' => 'btn btn-success')) }}</center>
                                        </div>
                                        
                                    {{ Form::close() }}
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