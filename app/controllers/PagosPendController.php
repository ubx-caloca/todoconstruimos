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
		$cobrosPorConfirmar = CobroPendiente::whereNull('referenciaPago')->orWhere('referenciaPago', '')->orderBy('fecha', 'desc');
		//$cobrosConfirmados = CobroPendiente::whereNotNull('referenciaPago')->Where('referenciaPago', '!=', '')->orderBy('fecha', 'desc')->get();
		//$cobrospordenados = $cobrosPorConfirmados->merge($cobrosPorConfirmar);
		//return $cobrospordenados->paginate(10);
		//$cobrospordenados = $cobrosPorConfirmados->merge($cobrosPorConfirmar);	

		$cobrospordenados = CobroPendiente::whereNotNull('referenciaPago')->orWhere('referenciaPago', '!=', '')->orderBy('fecha', 'desc')->unionAll($cobrosPorConfirmar->getQuery())->get();
		
		
		return View::make('administracion.pages.pagospendientes.index')->with(array('listaPagosPendientes'=>$cobrospordenados, 'usuarioimg'=>$authuser->imagen, 'usuarionombre'=>$authuser->nombre, 'usuarioid'=>$authuser->id));	
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return  'Mostrar el create del PagosPendController';
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
		$authuser = Auth::user();
		$cobrop = CobroPendiente::find($id);
		$cobrot = $cobrop->cobro->tipo;
		$cobro = $cobrop->cobro;
		
		//Dependiendo de cobro_tipo, regregar estado de objeto de cobro a antes de solicitar premium
		if($cobrot->tipo == 'ser_proveedor'){
			
			//regresar campo 'solicitar_premium' de 1 a 0
			$prov = Usuario::find($cobro->datosAdicionales)->proveedor;
			$prov->solicitar_premium = 0;
			$prov->save();
					
		}
		if($cobrot->tipo == 'clasificado_premium'){
			//regresar campo 'solicitar_premium' de 1 a 0
			$clas = Clasificado::find($cobro->datosAdicionales);
			$clas->solicitar_premium=0;		
		}	
		if($cobrot->tipo == 'imagen_proveedor'){
			//regresar campo 'premium' de 1/2 a 0
		}
		//TODO: falta los cobrot=== de banners
		if($cobrot->tipo == 'banner_index-izq' || $cobrot->tipo == 'banner_index-der' || $cobrot->tipo == 'banner_index-arr' ){
			//hacer algo
		}
		
		$cobrop->delete();
		
		//Si cobro todavia no se activa (es decir cobro->fechaExpiracion es NULL y cobro->estado =='pendiente')
		//=> borrar registro de cobro
		if($cobro->fechaExpiracion == null && ($cobro->estado==null||$cobro->estado==''|| $cobro->estado=='pendiente'))
			$cobro->delete();
		
		
		return Redirect::to('/administracion/pagospendientes');
	}


}
