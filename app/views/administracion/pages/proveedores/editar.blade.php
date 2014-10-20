<!DOCTYPE html>
<html>
    <head>

            @include('administracion.head')

			<style>
			.NonEditableLabel{
				font-weight: initial;
				background-color: #eee;
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





                                    <div class="container">
                                    <div class="panel panel-default">

                                      <div class="panel-heading">
                                        <h3 class="panel-title">EDITAR PROVEEDOR</h3>
                                      </div>

                                      <div class="panel-body">
                                        {{ Form::open(array('url' => 'administracion/proveedores/guardarproveedor/'.$proveedores->id,'method'=>'put', 'files' => true)) }}
                                            <hr>
                                            <center><h4>Datos generales del proveedor</h4></center>
                                            <hr>
                                            <div class="form-group">
                                                    {{ Form::label('proveedor_tipo_idproveedor_tipo', 'Tipo de proveedor') }}
                                                    {{ Form::select('proveedor_tipo_idproveedor_tipo', $listaTiposDeProveedores , $proveedores->proveedor_tipo_idproveedor_tipo, array( 'placeholder' => '',  'class' => 'form-control')) }}
                                            </div>
                                            <div class="form-group">
                                                    {{ Form::label('nombre_usuario', 'Nombre de usuario') }}
                                                    {{ Form::label('nombre_usuario', $proveedores->nombre_usuario, array( 'placeholder' => '',  'class' => 'form-control NonEditableLabel')) }}
                                            </div>
                                            <div class="form-group">
                                                    {{ Form::label('nombre', 'Nombre') }}
                                                    {{ Form::text('nombre',$proveedores->nombre, array( 'placeholder' => '',  'class' => 'form-control')) }}
                                            </div>
                                            <div class="form-group">
                                                    {{ Form::label('direccion', 'Dirección') }}
                                                    {{ Form::text('direccion',$proveedores->direccion, array( 'placeholder' => '',  'class' => 'form-control')) }}
                                            </div>
                                            <div class="form-group">
                                                    {{ Form::label('telefono', 'Telefono') }}
                                                    {{ Form::text('telefono',$proveedores->telefono, array( 'placeholder' => '',  'class' => 'form-control')) }}
                                            </div>
                                            <div class="form-group">
                                                    {{ Form::label('facebook', 'Página de Facebook') }}
                                                    {{ Form::text('facebook',$proveedores->facebook, array( 'placeholder' => '',  'class' => 'form-control')) }}
                                            </div>
                                            <div class="form-group">
                                                    {{ Form::label('twitter', 'Página de Twitter') }}
                                                    {{ Form::text('twitter',$proveedores->twitter, array( 'placeholder' => '',  'class' => 'form-control')) }}
                                            </div>
                                            <div class="form-group">
                                                    {{ Form::label('otro_sns', 'Otra red social') }}
                                                    {{ Form::text('otro_sns',$proveedores->otro_sns, array( 'placeholder' => '',  'class' => 'form-control')) }}
                                            </div>
											<div class="form-group">
                                                {{ Form::label('habilitar', 'Habilitado') }}
												{{ Form::select('habilitar', array('0' => 'No','1' => 'Si'), $proveedores->habilitar, array( 'placeholder' => '',  'class' => 'form-control')) }}
											</div>
                                            <hr>
                                            <center><h4>Coordenadas de la ubicación geográfica</h4></center>
                                            <hr>
                                            <div class="form-group">
                                                    {{ Form::label('longitud', 'Longitud') }}
                                                    {{ Form::text('longitud',$proveedores->longitud, array( 'placeholder' => '',  'class' => 'form-control')) }}
                                            </div>
                                            <div class="form-group">
                                                    {{ Form::label('latitud', 'Latitud') }}
                                                    {{ Form::text('latitud',$proveedores->latitud, array( 'placeholder' => '',  'class' => 'form-control')) }}
                                            </div>
                                            <hr>
                                            <center><h4>Detalles del proveedor</h4></center>
                                            <hr>
                                            <div class="form-group">
                                                    {{ Form::label('introduccion', 'Introducción') }}
                                                    {{ Form::text('introduccion',$proveedores_detalle->introduccion, array( 'placeholder' => '',  'class' => 'form-control')) }}
                                            </div>
                                            <div class="form-group">
                                                    {{ Form::label('descripcion', 'Descripción') }}
                                                    {{ Form::text('descripcion',$proveedores_detalle->descripcion, array( 'placeholder' => '',  'class' => 'form-control')) }}
                                            </div>
                                            <div class="form-group">
                                                    {{ Form::label('vision', 'Visión') }}
                                                    {{ Form::text('vision',$proveedores_detalle->vision, array( 'placeholder' => '',  'class' => 'form-control')) }}
                                            </div>
                                            <div class="form-group">
                                                    {{ Form::label('productos', 'Productos') }}
                                                    {{ Form::text('productos',$proveedores_detalle->productos, array( 'placeholder' => '',  'class' => 'form-control')) }}
                                            </div>
                                            <hr>
                                            <center><h4>Imagenes de fondo</h4></center>
                                            <hr>
                                            <div class="form-group">
                                                    {{ Form::label('imagen_intro', 'Imagen de la sección de Introducción') }}
                                                    {{ Form::file('imagen_intro[]',['multiple' => true]) }}
                                            </div>
                                            <div class="form-group">
                                                    {{ Form::label('imagen_descripcion', 'Imagen de la sección de Descripción') }}
                                                    {{ Form::file('imagen_descripcion[]',['multiple' => true]) }}
                                            </div>
                                            <div class="form-group">
                                                    {{ Form::label('imagen_vision', 'Imagen de la sección de Visión') }}
                                                    {{ Form::file('imagen_vision[]',['multiple' => true]) }}
                                            </div>
                                            <hr>
                                            <div class="form-group">
                                                    <center>{{ Form::submit('Agregar proveedor', array('class' => 'btn btn-success')) }}</center>
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