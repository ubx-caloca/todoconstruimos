<?php

class indexController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$categorias = DB::table('proveedor_tipo')->get();
		$blog = DB::table('blog')->orderBy('id','desc')->take(4)->get();
		$clasificadosvip = Clasificado::where('premium', '=', 1)->where('habilitar', '=', 1)->orderBy('fecha_publicacion','DESC')->get();
		$categoriasClasif = ClasificadoCategoria::all();
		$anuncios = Anuncio::all();
		$eventos = DB::table('eventos')->orderBy('fecha','desc')->get();
		$videoblog = DB::table('videoBlog')->orderBy('id','desc')->take(4)->get();
		$galeriapremium = ProveedorGaleria::where('premium', '=', 2)->orderBy('created_at','ASC')->get();
		//$proveedores = DB::table('proveedores')->where('nombre_usuario', '=', "$nombre_usuario")->first();
		//$proveedores_detalle = Proveedor_detalle::where('proveedores_idproveedor', '=', $proveedores->id)->first();
		//$galeria = DB::table('proveedor_galeria')->where('proveedores_idproveedor', '=', $proveedores->id)->get();
		
		//$user = Usuario::find(1);
		//Auth::logout();
		//Auth::login($user, true);
		
		$rolusuarioLogueado = '';
		$mailusuarioLogueado = '';
		$nombreusuarioLogueado = '';
		if (Auth::check()){
			$authuser = Auth::user();
			$usu = Usuario::find($authuser->id);
			$mailusuarioLogueado = $authuser->email;
			$nombreusuarioLogueado = $authuser->nombre;
			$rolusuarioLogueado= DB::table('usuario_tiene_rol2')->where('usuario_id', '=', $authuser->id)->first();
			$rolusuarioLogueado = UsuarioRol::find($rolusuarioLogueado->rol_id)->rol;
			
		}
		//else{
		//	return  'No hay user';
		//}
		
		$bannersindexarriba = Banner::where('seccion', '=', 'INDEX-ARRIBA')->where('habilitar', '=', 1)->orderBy('id','asc')->get();
		
		//return View::make('index.index')->with(array('proveedores'=>$proveedores,'proveedores_detalle'=>$proveedores_detalle,'galeria'=>$galeria));
		return View::make('index.index')->with(array('galeriapremium'=>$galeriapremium,'videoblog'=>$videoblog,'categorias'=>$categorias,'blog'=>$blog, 'clasificadosvip' => $clasificadosvip, 'anuncios' => $anuncios, 'categoriasClasif' => $categoriasClasif, 'eventos' => $eventos, 'username'=> $mailusuarioLogueado, 'nameuser'=> $nombreusuarioLogueado, 'roluser'=> $rolusuarioLogueado, 'bannersindexarriba'=>$bannersindexarriba));
		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}
	
	public function mostrarProximamente(){
		$anuncios = Anuncio::all();

		$bannersindexarriba = Banner::where('seccion', '=', 'INDEX-ARRIBA')->where('habilitar', '=', 1)->orderBy('id','asc')->get();
		
		//return View::make('index.index')->with(array('proveedores'=>$proveedores,'proveedores_detalle'=>$proveedores_detalle,'galeria'=>$galeria));
		return View::make('index.proximamente')->with(array('anuncios' => $anuncios, 'bannersindexarriba'=>$bannersindexarriba));
		//		
	}


}
