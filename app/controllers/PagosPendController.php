<?php

class PagosPendController extends \BaseController {

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
		$cobrosPorConfirmar = CobroPendiente::whereNull('referenciaPago')->orWhere('referenciaPago', '')->orderBy('fecha', 'desc')->get();
		$cobrosPorConfirmados = CobroPendiente::whereNotNull('referenciaPago')->orWhere('referenciaPago', '!>', '')->orderBy('fecha', 'desc')->get();
		$cobrospordenados = $cobrosPorConfirmados->merge($cobrosPorConfirmar);
		$totalItems = count($cobrosPorConfirmar)+ count($cobrosPorConfirmados);
		
		
		$paginated = Paginator::make($cobrospordenados->toArray(), $totalItems, 10);
		//return CobroPendiente::paginate(10);

		return View::make('administracion.pages.pagospendientes.index')->with(array('listaPagosPendientes'=>$paginated, 'usuarioimg'=>$authuser->imagen, 'usuarionombre'=>$authuser->nombre, 'usuarioid'=>$authuser->id));
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
