<?php

class PagosPendDatosVistaController extends \BaseController {

	public function meterdatos($id){
		$authuser = Auth::user();
		return View::make('vistausuario.pages.pagospendientes.meterdatos')->with(array('pagopid'=>$id, 'usuarioimg'=>$authuser->imagen, 'usuarionombre'=>$authuser->nombre, 'usuarioid'=>$authuser->id));
	}
	
	public function guardarmeterdatos(){
		$authuser = Auth::user();
		
		$rules = array(
			'metodopago'       => 'required',
			'referenciapago'      => 'required',
		);
		$validator = Validator::make(Input::all(), $rules);		
		
		if ($validator->fails()) {
			return View::make('vistausuario.pages.pagospendientes.meterdatos')->with(array('pagopid'=>$id, 'usuarioimg'=>$authuser->imagen, 'usuarionombre'=>$authuser->nombre, 'usuarioid'=>$authuser->id))->withErrors($validator)->withInput();
		} else {
		
			$pagopendiente = CobroPendiente::find(Input::get('pagopid'));
			$pagopendiente->metodoPago  = Input::get('metodopago');
			$pagopendiente->referenciaPago  = Input::get('referenciapago');	
			$pagopendiente->save();
			return Redirect::to('/vistausuario/pagospendientes');
		}
		
	}


	public function modifdatos($id){
		$authuser = Auth::user();
		$pagopendiente = CobroPendiente::find($id);
		return View::make('vistausuario.pages.pagospendientes.modifdatos')->with(array('pagop'=>$pagopendiente, 'usuarioimg'=>$authuser->imagen, 'usuarionombre'=>$authuser->nombre, 'usuarioid'=>$authuser->id));
	}
	
	public function guardarmodifdatos(){
		$authuser = Auth::user();
		
		$rules = array(
			'metodopago'       => 'required',
			'referenciapago'      => 'required',
		);
		$validator = Validator::make(Input::all(), $rules);		
		
		if ($validator->fails()) {
			return View::make('vistausuario.pages.pagospendientes.modifdatos')->with(array('pagop'=>$pagopendiente, 'usuarioimg'=>$authuser->imagen, 'usuarionombre'=>$authuser->nombre, 'usuarioid'=>$authuser->id))->withErrors($validator)->withInput();
		} else {
		
			$pagopendiente = CobroPendiente::find(Input::get('pagopid'));
			$pagopendiente->metodoPago  = Input::get('metodopago');
			$pagopendiente->referenciaPago  = Input::get('referenciapago');	
			$pagopendiente->save();
			return Redirect::to('/vistausuario/pagospendientes');
		}
	
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
