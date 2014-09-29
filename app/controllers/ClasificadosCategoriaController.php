<?php

class ClasificadosCategoriaController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$authuser = Auth::user();
		$listaDeCategorias = ClasificadoCategoria::all();
		return View::make('administracion.pages.clasificados.categoria')->with(array('listaDeCategorias'=>$listaDeCategorias, 'usuarioimg'=>$authuser->imagen, 'usuarionombre'=>$authuser->nombre, 'usuarioid'=>$authuser->id));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
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
			'categoria'       => 'required',
			'descripcion'      => 'required',
			'icono'            => 'required'
		);
		$validator = Validator::make(Input::all(), $rules);

		// process the login
		if ($validator->fails()) {
			return Redirect::to('administracion/clasificadoscategorias')->with(array('usuarioimg'=>$authuser->imagen, 'usuarionombre'=>$authuser->nombre, 'usuarioid'=>$authuser->id))->withErrors($validator)->withInput();
		} else {
			// store
			$clasfCat = new ClasificadoCategoria;
			$clasfCat->categoria       = Input::get('categoria');
			$clasfCat->descripcion      = Input::get('descripcion');
			$clasfCat->icono      = Input::get('icono');
			$clasfCat->save();

			// redirect
			Session::flash('message', 'Categoria de clasificado ha sido creada exitosamente!');
			return Redirect::to('administracion/clasificadoscategorias')->with(array('usuarioimg'=>$authuser->imagen, 'usuarionombre'=>$authuser->nombre, 'usuarioid'=>$authuser->id));
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
				return 'Aqui esta show '.$id;
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
		$clasfCat = ClasificadoCategoria::find($id);
		$listaDeCategorias = ClasificadoCategoria::all();

		// show the edit form and pass the nerd
		return View::make('administracion.pages.clasificados.categoriaedit')
			->with('clasfCat', $clasfCat)->with(array('listaDeCategorias'=> $listaDeCategorias, 'usuarioimg'=>$authuser->imagen, 'usuarionombre'=>$authuser->nombre, 'usuarioid'=>$authuser->id));
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
		$authuser = Auth::user();
		$rules = array(
			'categoria'       => 'required',
			'descripcion'      => 'required',
			'icono'      => 'required'
		);
		$validator = Validator::make(Input::all(), $rules);

		// process the login
		if ($validator->fails()) {
			return Redirect::to('administracion/clasificadoscategorias/' . $id . '/edit')->with(array('usuarioimg'=>$authuser->imagen, 'usuarionombre'=>$authuser->nombre, 'usuarioid'=>$authuser->id))->withErrors($validator)->withInput();
		} else {
			// store
			$clasfCat = ClasificadoCategoria::find($id);
			$clasfCat->categoria       = Input::get('categoria');
			$clasfCat->descripcion      = Input::get('descripcion');
			$clasfCat->icono      = Input::get('icono');
			$clasfCat->save();

			// redirect
			Session::flash('message', 'Categoria de clasificado ha sido editada exitosamente!');
			return Redirect::to('administracion/clasificadoscategorias')->with(array('usuarioimg'=>$authuser->imagen, 'usuarionombre'=>$authuser->nombre, 'usuarioid'=>$authuser->id));
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
		//return 'destroy del clasificados categorias '.$id;
		$authuser = Auth::user();
		$clasificadoCat = ClasificadoCategoria::find($id);
		
		$clasfs = $clasificadoCat->clasificados;
		foreach($clasfs as $clasif){
			$imagenes = $clasif->imagenes;
			foreach($imagenes as $imag){
				File::delete('images/clasificados/'.$imag->nombre_imagen);
			}
		}	
		$clasificadoCat->delete();
		Session::flash('message', 'La categoria ha sido eliminada exitosamente!');
		return Redirect::to('administracion/clasificadoscategorias')->with(array('usuarioimg'=>$authuser->imagen, 'usuarionombre'=>$authuser->nombre, 'usuarioid'=>$authuser->id));
	}


}
