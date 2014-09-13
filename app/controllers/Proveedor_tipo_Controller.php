<?php

class Proveedor_tipo_Controller extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$categorias = DB::table('proveedor_tipo')->get();
		return View::make('administracion.pages.proveedores.categorias')->with('categorias',$categorias);
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
		$proveedores_tipo = new Proveedor_tipo;
		$proveedores_tipo->id=0;
		$proveedores_tipo->tipo=Input::get('tipo');
		$proveedores_tipo->icono=Input::get('icono');
		$proveedores_tipo->save();
		return Redirect::to("administracion/proveedores/categorias");

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
