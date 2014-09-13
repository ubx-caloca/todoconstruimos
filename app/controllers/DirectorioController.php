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
