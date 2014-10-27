<?php

class CobrosHistorialController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$authuser = Auth::user();
		$cobrosH = CobroHistorial::orderBy('fechaPago','desc')->paginate(10);
		return View::make('administracion.pages.cobroshistorial.index')->with(array('listaCobrosH'=>$cobrosH, 'usuarioimg'=>$authuser->imagen, 'usuarionombre'=>$authuser->nombre, 'usuarioid'=>$authuser->id));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return 'CobrosHistorialController create';
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		return 'CobrosHistorialController store';
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return 'CobrosHistorialController show('.$id.')';
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return 'CobrosHistorialController edit('.$id.')';
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		return 'CobrosHistorialController update('.$id.')';
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
		$cobroH = CobroHistorial::find($id);

		$cobroH->delete();

		// redirect
		Session::flash('message', 'El cobro historial ha sido eliminado exitosamente!');
		return Redirect::to('administracion/cobroshistorial')->with(array('usuarioimg'=>$authuser->imagen, 'usuarionombre'=>$authuser->nombre, 'usuarioid'=>$authuser->id));
	}
	
	public function eliminarTodos(){
		$cobrosH = CobroHistorial::all();
		foreach($cobrosH as $cobroH){
			$cobroH->delete();		
		}
		Session::flash('message', 'Todos los cobros historial han sido eliminados exitosamente!');
		return Redirect::to('administracion/cobroshistorial')->with(array('usuarioimg'=>$authuser->imagen, 'usuarionombre'=>$authuser->nombre, 'usuarioid'=>$authuser->id));
	}


}
