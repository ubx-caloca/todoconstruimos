<?php

class Proveedor_tipo_Controller extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$categorias = ProveedorTipo::all();
		$authuser = Auth::user();
		return View::make('administracion.pages.proveedores.categorias')->with(array('categorias'=>$categorias, 'usuarioimg'=>$authuser->imagen, 'usuarionombre'=>$authuser->nombre, 'usuarioid'=>$authuser->id));
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
		$proveedores_tipo = new ProveedorTipo;
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
		$categorias = ProveedorTipo::all();
		$authuser = Auth::user();
		$provT = ProveedorTipo::find($id);
		return View::make('administracion.pages.proveedores.categoriaedit')->with(array('listaCategorias'=>$categorias, 'usuarioimg'=>$authuser->imagen, 'usuarionombre'=>$authuser->nombre, 'usuarioid'=>$authuser->id, 'provT'=>$provT));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$proveedores_tipo = ProveedorTipo::find($id);
		$proveedores_tipo->tipo=Input::get('categoria');
		$proveedores_tipo->icono=Input::get('icono');
		$proveedores_tipo->save();	
		return Redirect::to("administracion/proveedores/categorias");		
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$proveedores_tipo = ProveedorTipo::find($id);
		$proveedores = $proveedores_tipo->proveedores;
		foreach($proveedores as $prov){
			$success = File::deleteDirectory('images/proveedores/'.$prov->nombre_usuario); //Borrar todas las imagenes adentro y el folder
		}
		$proveedores_tipo->delete();
		return Redirect::to("administracion/proveedores/categorias");
	}


}
