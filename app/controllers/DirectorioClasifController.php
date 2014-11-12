<?php

class DirectorioClasifController extends \BaseController {


	public function directorio($directorioCategoria)
	{
		$anuncios = Anuncio::all();
		$categoriasClasif = ClasificadoCategoria::all();
		if($directorioCategoria=='all'){
			$listaClasificadosPremium = Clasificado::where('premium', '=', 1)->where('habilitar', '=', 1)->orderBy('fecha_publicacion','DESC')->get();
			$listaClasificadosNormales = Clasificado::where('premium', '=', 0)->where('habilitar', '=', 1)->orderBy('fecha_publicacion','DESC')->get();
		}
		else{
		$categoria = ClasificadoCategoria::find($directorioCategoria);
		//$clasificados = $categoria->clasificados;
		$listaClasificadosPremium = Clasificado::where('categoria_id', '=', $directorioCategoria)->where('premium', '=', 1)->where('habilitar', '=', 1)->orderBy('fecha_publicacion','DESC')->get();
		$listaClasificadosNormales = Clasificado::where('categoria_id', '=', $directorioCategoria)->where('premium', '=', 0)->where('habilitar', '=', 1)->orderBy('fecha_publicacion','DESC')->get();
		}
		
		$bannersizquierda = Banner::where('seccion', '=', 'CLASIFICADOS-IZQUIERDA')->where('habilitar', '=', 1)->orderBy('id','asc')->get();
		$bannersderecha = Banner::where('seccion', '=', 'CLASIFICADOS-DERECHA')->where('habilitar', '=', 1)->orderBy('id','asc')->get();
		$bannersindexarriba = Banner::where('seccion', '=', 'INDEX-ARRIBA')->where('habilitar', '=', 1)->orderBy('id','asc')->get();
		
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
		
		return View::make('index.directorioClasificados')->with(array('anuncios'=>$anuncios, 'categoriasClasif' => $categoriasClasif, 'listaClasificadosPremium'=> $listaClasificadosPremium, 'directorioCat' => (($directorioCategoria=='all')? 'Todos los clasificados':$categoria->categoria ), 'listaClasificadosNormales'=> $listaClasificadosNormales, 'bannersizquierda'=>$bannersizquierda,'bannersderecha'=>$bannersderecha, 'bannersindexarriba'=>$bannersindexarriba, 'username'=> $mailusuarioLogueado, 'nameuser'=> $nombreusuarioLogueado, 'roluser'=> $rolusuarioLogueado));
		//
	}
	public function categorias()
	{
		return 'jejejeje';
		//
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
	return 'jijijij';
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
