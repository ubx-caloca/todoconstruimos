<?php

class ProveedorPaginaController extends \BaseController {

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

	}

	public function datosProveedor($nombre_usuario)
	{ 
		 //$proveedores = Proveedor::find($id);
		//$proveedores = Proveedor::where('nombre_usuario', '=', "$nombre_usuario")->first();
		$proveedores = DB::table('proveedores')->where('nombre_usuario', '=', "$nombre_usuario")->first();
		$proveedores_detalle = Proveedor_detalle::where('proveedores_idproveedor', '=', $proveedores->id)->first();
		$galeria = DB::table('proveedor_galeria')->where('proveedores_idproveedor', '=', $proveedores->id)->get();
		return View::make('administracion.pages.proveedores.pagina.pagina')->with(array('proveedores'=>$proveedores,'proveedores_detalle'=>$proveedores_detalle,'galeria'=>$galeria));		
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
