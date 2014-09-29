<!doctype html>
<html>
<head>
	@include('administracion.includes.head')
</head>
<body>

	@include('administracion.includes.menu')

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 main">

          @yield('contenido')

        </div>
      </div>
    </div>

	@include('administracion.includes.footer')
</body>
</html>