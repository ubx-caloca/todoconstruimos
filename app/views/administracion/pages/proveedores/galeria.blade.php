<!DOCTYPE html>
<html>
    <head>

            @include('administracion.head')

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
                        <small>Administración del sistema</small>
                    </h1>
                </section>

                <!-- Main content -->
                <section class="content">











                    <!-- Main row -->
                    <div class="row">
                        <!-- Left col -->
                        <section class="col-lg-12 connectedSortable">                            





                                    <div class="container">
                                    <div class="panel panel-default">

                                      <div class="panel-heading">
                                        <h3 class="panel-title">AGREGAR GALERÍA DE FOTOS AL PROVEEDOR ({{ $nombreDeUsuario }} - {{ $idproveedor }})</h3>
                                      </div>

                                      <div class="panel-body">
                                        {{ Form::open(array('url' => 'administracion/proveedores/galeria', 'files' => true)) }}
                                            <center><h4>Imagenes</h4></center>
                                            <hr>
                                            <div class="form-group">
                                                    {{ Form::label('galeria', 'Selecciona las imagenes a subir') }}
                                                    {{ Form::file('galeria[]',['multiple' => true]) }}
                                                    {{ Form::hidden('idproveedor', $idproveedor) }}
                                                    {{ Form::hidden('nombreDeUsuario', $nombreDeUsuario) }}
                                            </div>
                                            <hr>
                                            <div class="form-group">
                                                    <center>{{ Form::submit('Agregar fotos', array('class' => 'btn btn-success')) }}</center>
                                            </div>

                                        {{ Form::close() }}
                                      </div>

                                    <?php
                                            $galeria = DB::table('proveedor_galeria')->where('proveedores_idproveedor', '=', $idproveedor)->get();
                                             $numero=1;

                                    ?>
                                    <hr>
                                        <CENTER><h2> GALERÍA DE IMAGENES </h2></CENTER>
                                    <hr>
                                    {{ Form::open(array('url' => 'administracion/proveedores/galeria/editar', 'method'=>'put', 'files' => true)) }}
                                    @foreach ($galeria as $foto)
                                                    <div class="row">
                                                        <div class="col-md-1">
                                                            <center><?php echo "$numero"; $numero++;?></center>
                                                        </div>
                                                        <div class="col-md-10">
                                                            <center><?php echo "<img src=\"/images/proveedores/$nombreDeUsuario/galeria/".$foto->imagen." \" alt=\"foto\" class=\"img-thumbnail\">";?></center>
                                                                <br>
                                                                <center>Selecciona si deseas eliminar esta foto: {{ Form::checkbox('eliminar[]', $foto->id) }}</center>
                                                                <br>
                                                                <div class="form-group">
                                                                        {{ Form::label('descripcion', 'Descripción:') }}
                                                                        {{ Form::text('descripcion[]',$foto->texto, array( 'placeholder' => '',  'class' => 'form-control')) }}
                                                                        {{ Form::hidden('idimagen[]', $foto->id) }}
                                                                        {{ Form::hidden('idproveedor[]', $foto->proveedores_idproveedor) }}
                                                                </div>                                                            
                                                        </div>
                                                    </div>
                                                    <hr><hr>
                                    @endforeach
                                    <div class="form-group">
                                                    <center>{{ Form::submit('Actualizar', array('class' => 'btn btn-success')) }}</center>
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