<?php

class ClasfSolPremiumVistaController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	 
	 public function solicpremium(){
		$authuser = Auth::user();
		$clasificado = Clasificado::find(Input::get('clasfid'));

		$clasificado->solicitar_premium = 1;
		$clasificado->save();
		//Generar row en cobros y cobros_pendientes
		$cobrotipoSerProveedor= CobroTipo::where('tipo', 'clasificado_premium')->first();
		$cobro = new Cobro;
		$cobro->tipo_id = $cobrotipoSerProveedor->id;
		$cobro->usuario_id= $authuser->id;
		$cobro->estado= 'pendiente';
		$cobro->datosAdicionales = $clasificado->id; //Al entrar a este metodo estoy seguro que el usuario tiene un registro de proveedor asociado
		$cobro->save();
		
		$id = Str::random(4);
		$date_now = new DateTime();
		$cobrop = new CobroPendiente;
		$cobrop->cobro_id = $cobro->id;
		$cobrop->fecha = $date_now;
		$cobrop->cobro_concepto = 'TODCONS'.$cobro->id . 'CLASF'.$clasificado->id.$date_now->format('YmdHi').$id; // Concepto = clave_empresa+ clave_cobro+ clave_tipo_cobro + clave_objeto_de_cobro + fecha+4_digitos_random (Por favor mejorar!!)
		$cobrop->save();		
		
		return Redirect::to('vistausuario/clasificados')->with(array('usuarioimg'=>$authuser->imagen, 'usuarionombre'=>$authuser->nombre, 'usuarioid'=>$authuser->id));	
	}
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
