<!DOCTYPE html>
<html>
    <head>

            @include('vistausuario.head')
			<style>
			.gmnoprint img { max-width: none !important;}
			</style>
<script src="http://maps.googleapis.com/maps/api/js?sensor=false">
</script>

<script>
<?php
	$latParaJs = '';
	if ($errors->has()){
		$latParaJs = (Input::old('latitud')==''?$latitud_ens: Input::old('latitud'));
	}
	else{
		$latParaJs = ($clasificado->latitud==''?$latitud_ens: $clasificado->latitud);
	}
	$lonParaJs = '';
	if ($errors->has()){
		$lonParaJs = (Input::old('longitud')==''?$longitud_ens: Input::old('longitud'));
	}
	else{
		$lonParaJs = ($clasificado->longitud==''?$longitud_ens: $clasificado->longitud);
	}
?>
function init_map(){
	var myOptions = {
		zoom:14,
		center:new google.maps.LatLng({{$latParaJs}},{{$lonParaJs}}),
		mapTypeId: google.maps.MapTypeId.ROADMAP
	};
	map = new google.maps.Map(document.getElementById("googleMap"), myOptions);
	marker = new google.maps.Marker({
		map: map,
		position: new google.maps.LatLng({{$latParaJs}},{{$lonParaJs}}),
		title: 'Set lat/lon values for this property',
		draggable: true
	});
	infowindow = new google.maps.InfoWindow({content:"Localización" });
	google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});
	infowindow.open(map,marker);
	
	google.maps.event.addListener(marker, 'dragend', function(a) {
	//window.alert("lat="+this.getPosition().lat()+" lon="+this.getPosition().lng());
	document.getElementById("latitud_id").value = this.getPosition().lat();
    document.getElementById("longitud_id").value = this.getPosition().lng();
    // bingo!
    // a.latLng contains the co-ordinates where the marker was dropped
});
	}
google.maps.event.addDomListener(window, 'load', init_map);
</script>
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
									 {{ Form::model($clasificado, array('route' => array('vistausuario.clasificados.update', $clasificado->id), 'method' => 'PUT',  'files'=> true)) }}
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
											<!--
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
									-->
											<div class="form-group">
												{{ Form::label('localizacion', 'Punto de venta de clasificado') }}
												@if ($errors->has())
													{{ Form::hidden('latitud', (Input::old('latitud')==''?$latitud_ens: Input::old('latitud')), array('id' => 'latitud_id')) }}
												@else
													{{ Form::hidden('latitud', ($clasificado->latitud==''?$latitud_ens: $clasificado->latitud), array('id' => 'latitud_id')) }}
												@endif
												@if ($errors->has())
													{{ Form::hidden('longitud', (Input::old('longitud')==''?$longitud_ens: Input::old('longitud')), array('id' => 'longitud_id')) }}
												@else
													{{ Form::hidden('longitud', ($clasificado->longitud==''?$longitud_ens: $clasificado->longitud), array('id' => 'longitud_id')) }}
												@endif
												<center><div id="googleMap" style="height:330px;margin-top: 10px;"></div>
												<div style="font-style: italic;font-size: small;">Arrastra el marcador a la localización deseada</div></center>
											</div>
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