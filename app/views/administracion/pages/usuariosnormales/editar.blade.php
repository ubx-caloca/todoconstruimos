<!DOCTYPE html>
<html>
    <head>

            @include('administracion.head')
<style>
.formControlPassword{

display: block;
width: 100%;
height: 34px;
padding: 6px 12px;
font-size: 14px;
line-height: 1.42857143;
color: #555;
background-color: #fff;
background-image: none;
border: 1px solid #ccc;
border-radius: 4px;
-webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
-webkit-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
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
									    <h3 class="panel-title">EDITAR USUARIO</h3>
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
									 {{ Form::model($usuario, array('route' => array('administracion.usuarios.update', $usuario->id), 'method' => 'PUT',  'files'=> true)) }}
											<hr>
											<center><h4>Datos de la cuenta del usuario</h4></center>
											<hr>
											<div class="form-group">
													{{ Form::label('user_email', 'Email de usuario') }}
													@if ($errors->has())
														{{ Form::text('user_email',  Input::old('user_email'), array( 'placeholder' => '',  'class' => 'form-control')) }}
													@else
														{{ Form::text('user_email', $usuario->email, array( 'placeholder' => '',  'class' => 'form-control')) }}
													@endif
											</div>
											<div class="form-group">
													{{ Form::label('user_password', 'Contraseña nueva') }}
													@if ($errors->has())
														{{ Form::password('user_password', array( 'placeholder' => '',  'class' => 'form-control')) }}
													@else
														{{ Form::password('user_password', array( 'placeholder' => '',  'class' => 'form-control')) }}
													@endif
											</div>
											<div class="form-group">
													{{ Form::label('user_passwordrep', 'Repetir contraseña nueva') }}
													@if ($errors->has())
														{{ Form::password('user_passwordrep', array( 'placeholder' => '',  'class' => 'form-control')) }}
													@else
														{{ Form::password('user_passwordrep', array( 'placeholder' => '',  'class' => 'form-control')) }}
													@endif
											</div>
											<hr>
											<center><h4>Datos adicionales del usuario</h4></center>
											<hr>
											<div class="form-group">
													{{ Form::label('user_nombre', 'Nombre') }}
													@if ($errors->has())
														{{ Form::text('user_nombre',  Input::old('user_nombre'), array( 'placeholder' => '',  'class' => 'form-control')) }}
													@else
														{{ Form::text('user_nombre', $usuario->nombre, array( 'placeholder' => '',  'class' => 'form-control')) }}
													@endif
											</div>
											<div class="form-group">
													{{ Form::label('user_telefono', 'Teléfono de casa') }}
													@if ($errors->has())
														{{ Form::text('user_telefono', Input::old('user_telefono'), array( 'placeholder' => '',  'class' => 'form-control')) }}
													@else
														{{ Form::text('user_telefono', $usuario->telefono, array( 'placeholder' => '',  'class' => 'form-control')) }}
													@endif
											</div>
											<div class="form-group">
													{{ Form::label('user_celular', 'Celular') }}
													@if ($errors->has())
														{{ Form::text('user_celular', Input::old('user_celular'), array( 'placeholder' => '',  'class' => 'form-control')) }}
													@else
														{{ Form::text('user_celular', $usuario->celular, array( 'placeholder' => '',  'class' => 'form-control')) }}
													@endif
											</div>
											<div class="form-group">
													{{ Form::label('user_nextel', 'Nextel') }}
													@if ($errors->has())
														{{ Form::text('user_nextel', Input::old('user_nextel'), array( 'placeholder' => '',  'class' => 'form-control')) }}
													@else
														{{ Form::text('user_nextel', $usuario->nextel, array( 'placeholder' => '',  'class' => 'form-control')) }}
													@endif
											</div>
											<hr>
											<center><h4>Imagen del usuario</h4></center>
											<hr>
											 <div style="width:100%; background-color:#ffffff; border-top: 7px solid #ffffff; border-bottom: 7px solid #ffffff;">
									                            <div class="owl-carousel">	
									                              <div> <img src="/images/usuarios/{{$usuario->imagen}}" alt=""  class="img-thumbnail" style="width: 150px;height: 100px;"/> </div>
									                            </div>        
									        </div> 
											<div class="form-group">
													{{ Form::label('user_imagen', 'Sobreescribir imagen') }}
													{{ Form::file('user_imagen',['class'=>'formlabel']) }}
											</div>
											<hr>
											<div class="form-group">
													<center>{{ Form::submit('Actualizar datos de usuario', array('class' => 'btn btn-success')) }}</center>
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