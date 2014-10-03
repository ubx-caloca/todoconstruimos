<?php

class PagosPendVistaController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$authuser = Auth::user();

		//Super query
		$cobrospusuario = CobroPendiente::whereIn('cobro_id', function($query) use ($authuser){
			$query->select('id')
			->from(with(new Cobro)->getTable())
			->where('usuario_id', $authuser->id);
		})->paginate(15);

		return View::make('vistausuario.pages.pagospendientes.index')->with(array('listaPagosPendientes'=>$cobrospusuario, 'usuarioimg'=>$authuser->imagen, 'usuarionombre'=>$authuser->nombre, 'usuarioid'=>$authuser->id));
		
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return 'Mostrar create de pagos pendientes vista';
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		return 'Mostrar store de pagos pendientes vista';
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
		return 'Mostrar edit('.$id.') de pagos pendientes vista';
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
		return 'Mostrar update('.$id.') de pagos pendientes vista';
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
