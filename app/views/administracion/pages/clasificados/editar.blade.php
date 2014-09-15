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

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
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
									<div class="panel panel-default">

									  <div class="panel-heading">
									    <h3 class="panel-title">EDITAR CLASIFICADO</h3>
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
									 {{ Form::model($clasificado, array('route' => array('administracion.clasificados.update', $clasificado->id), 'method' => 'PUT',  'files'=> true)) }}
											<hr>
											<center><h4>Datos generales del clasificado</h4></center>
											<hr>
											<div class="form-group">
													{{ Form::label('categoria_id', 'Categoría de clasificado') }}
													@if ($errors->has())
														{{ Form::select('categoria_id', $listaCategoriasClasificados , Input::old('categoria_id'), array( 'placeholder' => '',  'class' => 'form-control')) }}
													@else
													{{ Form::select('categoria_id', $listaCategoriasClasificados , $clasificado->categoria_id, array( 'placeholder' => '',  'class' => 'form-control')) }}
													@endif
											</div>
											<div class="form-group">
													{{ Form::label('clasf_titulo', 'Título de clasificado') }}
													@if ($errors->has())
														{{ Form::text('clasf_titulo',  Input::old('clasf_titulo'), array( 'placeholder' => '',  'class' => 'form-control')) }}
													@else
														{{ Form::text('clasf_titulo', $clasificado->titulo, array( 'placeholder' => '',  'class' => 'form-control')) }}
													@endif
											</div>
											<div class="form-group">
													{{ Form::label('clasf_descripcion', 'Descripción de clasificado') }}
													@if ($errors->has())
														{{ Form::textarea('clasf_descripcion', Input::old('clasf_descripcion'), array( 'placeholder' => '',  'class' => 'form-control')) }}
													@else
														{{ Form::textarea('clasf_descripcion', $clasificado->descripcion, array( 'placeholder' => '',  'class' => 'form-control')) }}
													@endif
											</div>
											<hr>
											<center><h4>Detalles del clasificado</h4></center>
											<hr>
											<div class="form-group">
													{{ Form::label('clasf_premium', 'Premium') }}
													@if ($errors->has())
														{{ Form::select('clasf_premium',array('1' => 'Si', '0' => 'No') , Input::old('clasf_premium'), array( 'placeholder' => '',  'class' => 'form-control')) }}
													@else
														{{ Form::select('clasf_premium',array('1' => 'Si', '0' => 'No') , $clasificado->premium, array( 'placeholder' => '',  'class' => 'form-control')) }}
													@endif
											</div>
											<div class="form-group">
													{{ Form::label('clasf_precio', 'Precio') }}
													@if ($errors->has())
														{{ Form::text('clasf_precio',  Input::old('clasf_precio'), array( 'placeholder' => '',  'class' => 'form-control')) }}
													@else
														{{ Form::text('clasf_precio', $clasificado->precio, array( 'placeholder' => '',  'class' => 'form-control')) }}
													@endif
											</div>
											<div class="form-group">
													{{ Form::label('clasf_moneda', 'Moneda') }}
													@if ($errors->has())
														{{ Form::text('clasf_moneda', Input::old('clasf_moneda'), array( 'placeholder' => '',  'class' => 'form-control')) }}
													@else
														{{ Form::text('clasf_moneda', $clasificado->moneda, array( 'placeholder' => '',  'class' => 'form-control')) }}
													@endif
											</div>
											<div class="form-group">
													{{ Form::label('clasf_habilitar', 'Habilitar') }}
													@if ($errors->has())
														{{ Form::select('clasf_habilitar', array('1' => 'Si', '0' => 'No') , Input::old('clasf_habilitar'), array( 'placeholder' => '',  'class' => 'form-control')) }}
													@else
														{{ Form::select('clasf_habilitar', array('1' => 'Si', '0' => 'No') , $clasificado->habiitar, array( 'placeholder' => '',  'class' => 'form-control')) }}
													@endif
											</div>
											<div class="form-group">
											<?php
											$fecPubString = (($errors->has())?Input::old('clasf_fechapub'): $clasificado->fecha_publicacion);
											$utc_date = new DateTime(
									                $fecPubString, 
									                new DateTimeZone('UTC')
									);

									$tj_date = $utc_date;
									$tj_date->setTimeZone(new DateTimeZone('America/Tijuana'));
											?>
													{{ Form::label('clasf_fechapub', 'Fecha de publicación') }}
													{{ Form::input('datetime','clasf_fechapub', date_format($tj_date, 'd M Y H:i a') , array( 'placeholder' => '',  'class' => 'form-control')) }}

											</div>
											
											<script type="text/javascript">
									   $('.clasf_fechapub').datetimepicker({
									        //language:  'fr',
									        weekStart: 1,
									        todayBtn:  1,
											autoclose: 1,
											todayHighlight: 1,
											startView: 2,
											forceParse: 0,
									        showMeridian: 1
									    });
									</script>  
											<hr>
											<center><h4>Imagenes del clasificado</h4></center>
											<hr>
											 <div style="width:100%; background-color:#ffffff; border-top: 7px solid #ffffff; border-bottom: 7px solid #ffffff;">
									                            <div class="owl-carousel">
																 @foreach ($imagenes as $img)		
									                              <div> <img src="/images/clasificados/{{$img->nombre_imagen}}" alt=""  class="img-thumbnail" style="width: 150px;height: 100px;"/> </div>
																  @endforeach
									                            </div>        
									        </div> 
											<div class="form-group">
													{{ Form::label('imagenes', 'Sobreescribir imagenes') }}
													{{ Form::file('imagenes[]',['multiple' => true]) }}
											</div>
											<hr>
											<div class="form-group">
													<center>{{ Form::submit('Guardar clasificado', array('class' => 'btn btn-success')) }}</center>
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