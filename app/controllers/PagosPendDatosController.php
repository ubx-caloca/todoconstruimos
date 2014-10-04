<?php

class PagosPendDatosController extends \BaseController {


	public function aceptarcobro(){
	
		$cobropid =  Input::get('pagodpid');
		$cobrop = CobroPendiente::find($cobropid);
		$cobrot = $cobrop->cobro->tipo;
		$cobro = $cobrop->cobro;
		$date_now = new DateTime();
		

		//Copiar datos a un nuevo row de CobroHistorial
		$cobroH = new CobroHistorial;
		$cobroH->cobro_id = $cobrop->cobro_id;
		$cobroH->fechaPago = $date_now;//Mejorar: Aqui mas bien seria la fecha en la que se registro el pago
		$cobroH->metodoPago = $cobrop->metodoPago;
		$cobroH->referenciaPago = $cobrop->referenciaPago;
		$cobroH->cobro_concepto = $cobrop->cobro_concepto;
		$cobroH->save();
		
		//Actualizar Cobro
		//=> Si es el primer cobro (fechaExpiracion ==null  y estado=='pendiente'
		if($cobro->fechaExpiracion == null ){
			$expdatetime = $date_now->add(new DateInterval('P'.$cobrot->diasVigencia.'D'));
			$cobro->fechaExpiracion = $expdatetime;
		}
		else{//Si es un cobro para extender el servicio premium
			$fechaEDT = new DateTime($cobro->fechaExpiracion);
			if($fechaEDT<$date_now){ //si servicio ya estaba expirado
				$expdatetime = $date_now->add(new DateInterval('P'.$cobrot->diasVigencia.'D')); //Agregar los dias a partir de la fecha actual
			}
			else{//si servicio todavia no expira
				$expdatetime = $fechaEDT->add(new DateInterval('P'.$cobrot->diasVigencia.'D')); //Agregar los dias a la fecha de expiracion actual
			}	
			$cobro->fechaExpiracion = $expdatetime;
		}
		$cobro->estado = 'pagado';//TODO: Falta ver seria un estado diferente cuando se paga por primera vez o las demas veces
		$cobro->save();
		
		//Borrar row de cobroPendiente
		$cobrop->delete();
	
		//Aqui ya depende del tipo de cobro
		if($cobrot->tipo == 'ser_proveedor'){		
			//regresar campo 'solicitar_premium' de 1 a 0 y poner habilitar a 1
			$prov = Usuario::find($cobro->datosAdicionales)->proveedor;
			$prov->solicitar_premium = 0;
			$prov->habilitar = 1;
			$prov->save();
					
		}
		if($cobrot->tipo == 'clasificado_premium'){
			//regresar campo 'solicitar_premium' de 1 a 0 y poner campo premium a 1
			$clas = Clasificado::find($cobro->datosAdicionales);
			$clas->solicitar_premium=0;
			$clas->premium=1;
		}	
		if($cobrot->tipo == 'imagen_proveedor'){
			//TODO: regresar campo 'premium' de 1/2 a 0
		}
		//TODO: falta los cobrot=== de banners
		if($cobrot->tipo == 'banner_index-izq' || $cobrot->tipo == 'banner_index-der' || $cobrot->tipo == 'banner_index-arr' ){
			//TODO:hacer algo
		}
		
		return Redirect::to('/administracion/pagospendientes');
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
