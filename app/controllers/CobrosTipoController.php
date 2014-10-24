<?php

class CobrosTipoController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$authuser = Auth::user();
		$listaCobrotipos = CobroTipo::orderBy('id','asc')->paginate(10);
		return View::make('administracion.pages.cobrotipos.index')->with(array('listaCobrotipos'=>$listaCobrotipos, 'usuarioimg'=>$authuser->imagen, 'usuarionombre'=>$authuser->nombre, 'usuarioid'=>$authuser->id));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return 'CobrosTipoController.create()';
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		return 'CobrosTipoController.create()';
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
		$cobrot = CobroTipo::find($id);
		return View::make('administracion.pages.cobrotipos.editar')->with(array('cobrot'=>$cobrot, 'usuarioimg'=>$authuser->imagen, 'usuarionombre'=>$authuser->nombre, 'usuarioid'=>$authuser->id));
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
		$cobrot = CobroTipo::find($id);
		$rules = array(
			'precio'       => 'required|numeric',
			'diasVigencia'      => 'required|integer',
		);
		$validator = Validator::make(Input::all(), $rules);		
		
		if ($validator->fails()) {
			return Redirect::to('administracion/cobrostipo/'.$id.'/edit')
				->withErrors($validator)->withInput();
		} else {
			$cobrot->precio = Input::get('precio');
			$cobrot->diasVigencia = Input::get('diasVigencia');
			$cobrot->save();
			
			return Redirect::to('administracion/cobrostipo');	
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
		return 'CobrosTipoController.destroy('.$id.')';
	}


}
