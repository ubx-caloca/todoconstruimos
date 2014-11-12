<?php

class ClasificadosDetalleController extends \BaseController {


	public function verclasif($idclasificado)
	{
		$anuncios = Anuncio::all();
		$categoriasClasif = ClasificadoCategoria::all();
		
		$clasf = Clasificado::find($idclasificado);
	
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
		
		$bannersizquierda = Banner::where('seccion', '=', 'CLASIFICADOS-IZQUIERDA')->where('habilitar', '=', 1)->orderBy('id','asc')->get();
		$bannersderecha = Banner::where('seccion', '=', 'CLASIFICADOS-DERECHA')->where('habilitar', '=', 1)->orderBy('id','asc')->get();
		$bannersindexarriba = Banner::where('seccion', '=', 'INDEX-ARRIBA')->where('habilitar', '=', 1)->orderBy('id','asc')->get();
		
		return View::make('index.clasificadoDetalle')->with(array('anuncios'=>$anuncios, 'categoriasClasif' => $categoriasClasif, 'clasificado'=> $clasf, 'bannersizquierda'=>$bannersizquierda,'bannersderecha'=>$bannersderecha, 'username'=> $mailusuarioLogueado, 'nameuser'=> $nombreusuarioLogueado, 'roluser'=> $rolusuarioLogueado, 'bannersindexarriba'=>$bannersindexarriba));
		//
	}


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
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
