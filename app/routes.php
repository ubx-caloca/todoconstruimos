<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
//Route::get('/', function()
//{
//	return View::make('index.index');
//});

Route::filter('auth.admin', function($route, $request){
    // Check user type admin/general etc
	$authuser = Auth::user();
	if (Auth::check()){
    // The user is logged in...
		$rolusuarioLogueado= DB::table('usuario_tiene_rol2')->where('usuario_id', '=', $authuser->id)->first();
		$rolusuarioLogueado = UsuarioRol::find($rolusuarioLogueado->rol_id)->rol;
		if ($rolusuarioLogueado != 'admin') return Redirect::to('/'); // home
	}
	else
		return Redirect::to('/');

});

Route::filter('auth.user', function($route, $request){
    // Check login user etc
	$authuser = Auth::user();
	if (!Auth::check())
		return Redirect::to('/');

});


Route::resource('/','indexController');
Route::get('/directorio/{directorioCategoria}','DirectorioController@directorio');

Route::get('/directorioClasif/{directorioCategoria}','DirectorioClasifController@directorio');
Route::get('/directorioClasif','DirectorioClasifController@categorias');
Route::get('/clasificadoDetalle/{clasificadoId}','ClasificadosDetalleController@verclasif');

// ===============================================
// BLOG
// ===============================================
Route::get('/blog/{post}','blogController@mostrarPost');
Route::get('/blog/','blogController@mostrarBlog');


Route::get('signup', array('uses' => 'SignupController@showSignup'));
Route::post('signup', array('uses' => 'SignupController@doSignup'));
Route::get('signout', array('uses' => 'SignupController@doSignout'));
Route::post('signin', array('uses' => 'SignupController@doSignin'));
Route::post('txcomentario', array('uses' => 'SignupController@enviarComent'));
// ===============================================
// SECCION DE ADMINISTRACION =================================
// ===============================================
Route::group(array('prefix' => 'administracion', 'before' => 'auth.admin'), function(){
		Route::get('/', function(){
			$authuser = Auth::user();			
			return View::make('administracion.index')->with(array('usuarioimg'=>$authuser->imagen, 'usuarionombre'=>$authuser->nombre, 'usuarioid'=>$authuser->id));
		});

		//CATEGORIAS
		Route::resource('proveedores/categorias','Proveedor_tipo_Controller');
		Route::resource('proveedores/categorias/agregar','Proveedor_tipo_Controller');

		//GALERIA
		Route::get('proveedores/galeria/{nombreDeUsuario}/{idproveedor}', function($nombreDeUsuario,$idproveedor){
			$authuser = Auth::user();	
			return View::make('administracion.pages.proveedores.galeria')->with(array('nombreDeUsuario' => $nombreDeUsuario, 'idproveedor' => $idproveedor, 'usuarioimg'=>$authuser->imagen, 'usuarionombre'=>$authuser->nombre, 'usuarioid'=>$authuser->id));
		});

		//PROVEEDORES
		Route::get('proveedores/editar/{id}', 'ProveedoresController@edit');	
		Route::resource('proveedores/nuevo','TipoProveedoresController');
		Route::resource('proveedores/guardarproveedor','ProveedoresController');
		Route::resource('proveedores/galeria','Galeria_subirController');
		Route::resource('proveedores/galeria/editar','Galeria_subirController');

		Route::resource('proveedores/listar','ProveedoresController');

		//BLOG
		Route::resource('blog','blogController');
		Route::resource('blog/publicar','blogController');
		Route::get('blog/editar/{id}','blogController@edit');
		Route::Resource('blog/guardarEdicion','blogController');
		Route::get('blog/borrar/{id}','blogController@destroy');
		
		//VIDEO BLOG
		Route::resource('videoblog','VideoblogController');

		Route::resource('anuncios', 'AnunciosController');		

		//CLASIFICADOS
		Route::resource('clasificados', 'ClasificadosController');
		Route::resource('clasificadoscategorias', 'ClasificadosCategoriaController');
		Route::get('clasifsolicpremium', 'ClasificadosController@solicpremium');
		Route::get('aceptarsolicpremium', 'ClasificadosController@aceptarsolicpremium');

		//EVENTOS
		Route::resource('eventos','eventosController');
		Route::resource('eventos/publicar','eventosController');
		Route::get('eventos/editar/{id}','eventosController@edit');
		Route::Resource('eventos/guardarEdicion','eventosController');
		Route::get('eventos/borrar/{id}','eventosController@destroy');
		
		//USUARIOS
		Route::resource('usuarios', 'UsuariosAdminController');
		Route::get('adminusuarioedit', 'UsuariosAdminController@editarAdmin');
		
		
		//PAGOS PENDIENTES
		Route::resource('pagospendientes', 'PagosPendController');
		Route::post('pagospendaceptarcobro', 'PagosPendDatosController@aceptarcobro');

});

// ===============================================
// SECCION DE VISTA USUARIO =================================
// ===============================================
Route::group(array('prefix' => 'vistausuario', 'before' => 'auth.user'), function(){
		Route::get('/', function(){
			$authuser = Auth::user();			
			return View::make('vistausuario.index')->with(array('usuarioimg'=>$authuser->imagen, 'usuarionombre'=>$authuser->nombre, 'usuarioid'=>$authuser->id));
		});
		
		//CLASIFICADOS
		Route::resource('clasificados', 'ClasificadosVistaController');
		Route::post('clasifsolicpremium', 'ClasfSolPremiumVistaController@solicpremium');
		
		//PROVEEDOR
		Route::resource('proveedor', 'ProveedorVistaController');
		Route::post('provsolicpremium', 'ProvSolPremiumVistaController@solicpremium');
		Route::resource('proveedorgaleria', 'ProveedorGaleriaVistaController');
		
		//USUARIOS
		Route::resource('usuarios', 'UsuariosVistaController');
		
		//PAGOS PENDIENTES
		Route::resource('pagospendientes', 'PagosPendVistaController');
		Route::get('pagospendmeterdatos/{id}', 'PagosPendDatosVistaController@meterdatos');
		Route::post('pagospendguardarmeterdatos', 'PagosPendDatosVistaController@guardarmeterdatos');
		Route::get('pagospendmodifdatos/{id}', 'PagosPendDatosVistaController@modifdatos');
		Route::post('pagospendguardarmodifdatos', 'PagosPendDatosVistaController@guardarmodifdatos');
});

		//PAGINA DE CADA PROVEEDOR
		// Route::get('proveedores/{nombreDeUsuario}/', function($nombreDeUsuario){
		// 	return View::make('administracion.pages.proveedores.pagina.pagina')->with(array('nombreDeUsuario' => $nombreDeUsuario));
		// });

Route::get('/proveedores/{nombreDeUsuario}','ProveedorPaginaController@datosProveedor');
