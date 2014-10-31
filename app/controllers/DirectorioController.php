<?php

class directorioController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($directorioCategoria)
	{
		$categorias = DB::table('proveedor_tipo')->get();
		$listaProveedores = DB::select('select * from proveedor_tipo,proveedores,proveedor_detalle where proveedor_tipo.id=proveedores.proveedor_tipo_idproveedor_tipo and proveedores.id=proveedor_detalle.proveedores_idproveedor');
		$listaCategoria = DB::select("select * from proveedor_tipo,proveedores,proveedor_detalle where proveedor_tipo.id=proveedores.proveedor_tipo_idproveedor_tipo and proveedores.id=proveedor_detalle.proveedores_idproveedor and proveedor_tipo.tipo='$directorioCategoria'");
		//$proveedores = DB::table('proveedores')->where('nombre_usuario', '=', "$nombre_usuario")->first();
		//$proveedores_detalle = Proveedor_detalle::where('proveedores_idproveedor', '=', $proveedores->id)->first();
		//$galeria = DB::table('proveedor_galeria')->where('proveedores_idproveedor', '=', $proveedores->id)->get();
		//return View::make('index.index')->with(array('proveedores'=>$proveedores,'proveedores_detalle'=>$proveedores_detalle,'galeria'=>$galeria));
		return View::make('index.directorio')->with(array('categorias'=>$categorias,'listaProveedores'=>$listaProveedores,'directorioCategoria'=>$directorioCategoria,'listaCategoria'=>$listaCategoria));
		//
	}

	public function directorio($directorioCategoria)
	{


		$rolusuarioLogueado = '';
		$mailusuarioLogueado = '';
		if (Auth::check()){
			$authuser = Auth::user();
			$usu = Usuario::find($authuser->id);
			$mailusuarioLogueado = $authuser->email;
			$rolusuarioLogueado= DB::table('usuario_tiene_rol2')->where('usuario_id', '=', $authuser->id)->first();
			$rolusuarioLogueado = UsuarioRol::find($rolusuarioLogueado->rol_id)->rol;
			
		}
		$anuncios = Anuncio::all();

		$bannersizquierda = DB::table('banners')->whereRaw("seccion='DIRECTORIO-IZQUIERDA' and habilitar=1")->orderBy('id','asc')->get();
		$bannersderecha = DB::table('banners')->whereRaw("seccion='DIRECTORIO-DERECHA' and habilitar=1")->orderBy('id','asc')->get();		
		$bannersindexarriba = Banner::where('seccion', '=', 'INDEX-ARRIBA')->where('habilitar', '=', 1)->orderBy('id','asc')->get();
		$categorias = DB::table('proveedor_tipo')->get();
		$listaProveedores = DB::select('select * from proveedor_tipo,proveedores,proveedor_detalle where proveedor_tipo.id=proveedores.proveedor_tipo_idproveedor_tipo and proveedores.id=proveedor_detalle.proveedores_idproveedor');
		$listaCategoria = DB::select("select * from proveedor_tipo,proveedores,proveedor_detalle where proveedor_tipo.id=proveedores.proveedor_tipo_idproveedor_tipo and proveedores.id=proveedor_detalle.proveedores_idproveedor and proveedor_tipo.tipo='$directorioCategoria'");
		//$proveedores = DB::table('proveedores')->where('nombre_usuario', '=', "$nombre_usuario")->first();
		//$proveedores_detalle = Proveedor_detalle::where('proveedores_idproveedor', '=', $proveedores->id)->first();
		//$galeria = DB::table('proveedor_galeria')->where('proveedores_idproveedor', '=', $proveedores->id)->get();
		//return View::make('index.index')->with(array('proveedores'=>$proveedores,'proveedores_detalle'=>$proveedores_detalle,'galeria'=>$galeria));
		return View::make('index.directorio')->with(array('bannersizquierda'=>$bannersizquierda,'bannersderecha'=>$bannersderecha,'categorias'=>$categorias,'listaProveedores'=>$listaProveedores,'directorioCategoria'=>$directorioCategoria,'listaCategoria'=>$listaCategoria, 'username'=> $mailusuarioLogueado, 'roluser'=> $rolusuarioLogueado, 'anuncios' => $anuncios, 'bannersindexarriba'=>$bannersindexarriba));
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


}
