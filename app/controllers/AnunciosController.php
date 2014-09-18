<?php

class AnunciosController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$authuser = Auth::user();
		$listaDeAnuncios = Anuncio::paginate(25);
		return View::make('administracion.pages.anuncios.index')->with(array('listaDeAnuncios'=>$listaDeAnuncios,'usuarioimg'=>$authuser->imagen, 'usuarionombre'=>$authuser->nombre));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$authuser = Auth::user();
		return View::make('administracion.pages.anuncios.nuevo')->with(array('usuarioimg'=>$authuser->imagen, 'usuarionombre'=>$authuser->nombre));
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$authuser = Auth::user();
		$rules = array(
			'titulo'       => 'required',
			'periodo'      => 'required',
		);
		$validator = Validator::make(Input::all(), $rules);		
		
		if ($validator->fails()) {
			return Redirect::to('administracion/anuncios/create')->with(array('usuarioimg'=>$authuser->imagen, 'usuarionombre'=>$authuser->nombre))->withErrors($validator)->withInput();
		} else {
			// store
						
			$anuncio = new Anuncio;
			$anuncio->anuncio       = Input::get('titulo');
			$anuncio->periodo      = Input::get('periodo');
			$anuncio->fecha = new DateTime();
			$anuncio->save();

			Session::flash('message', 'Anuncio creado exitosamente!');
			return Redirect::to('administracion/anuncios')->with(array('usuarioimg'=>$authuser->imagen, 'usuarionombre'=>$authuser->nombre));	
		}
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
		$authuser = Auth::user();
		$anuncio = Anuncio::find($id);
		return View::make('administracion.pages.anuncios.editar')->with(array('anuncio'=>$anuncio,'usuarioimg'=>$authuser->imagen, 'usuarionombre'=>$authuser->nombre));		
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$authuser = Auth::user();
		$rules = array(
			'titulo'       => 'required',
			'periodo'      => 'required',
		);
		$validator = Validator::make(Input::all(), $rules);		
		
		if ($validator->fails()) {
			return Redirect::to('administracion/anuncios/'.$id.'/edit')->with(array('usuarioimg'=>$authuser->imagen, 'usuarionombre'=>$authuser->nombre))->withErrors($validator)->withInput();
		} else {
			// store
						
			$anuncio =  Anuncio::find($id);
			$anuncio->anuncio       = Input::get('titulo');
			$anuncio->periodo      = Input::get('periodo');
			$anuncio->save();

			Session::flash('message', 'Anuncio editado exitosamente!');
			return Redirect::to('administracion/anuncios')->with(array('usuarioimg'=>$authuser->imagen, 'usuarionombre'=>$authuser->nombre));
		}
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$authuser = Auth::user();
		$anuncio = Anuncio::find($id);
		//return $clasificado;
		$anuncio->delete();

		// redirect
		Session::flash('message', 'El anuncio ha sido eliminado exitosamente!');
		return Redirect::to('administracion/anuncios')->with(array('usuarioimg'=>$authuser->imagen, 'usuarionombre'=>$authuser->nombre));
	}


}
