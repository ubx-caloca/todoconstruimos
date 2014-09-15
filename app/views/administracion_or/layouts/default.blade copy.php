<!doctype html>
<html>
<head>
	@include('administracion.includes.head')
</head>
<body>
<div class="container">

	<header class="row">
		@include('administracion.includes.header')
	</header>

	<div id="main" class="row">

			@yield('content')

	</div>

	<footer class="row">
		@include('administracion.includes.footer')
	</footer>

</div>
	@include('administracion.includes.libreriasfooter')
</body>
</html>