<?php
use Illuminate\Support\MessageBag;
class CobrosController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$authuser = Auth::user();
		$listaCobros = Cobro::orderBy('id','asc')->paginate(10);
		return View::make('administracion.pages.cobros.index')->with(array('listaCobros'=>$listaCobros, 'usuarioimg'=>$authuser->imagen, 'usuarionombre'=>$authuser->nombre, 'usuarioid'=>$authuser->id));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return 'CobrosController.create()';
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		return 'CobrosController.store()';
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
		$authuser = Auth::user();
		$cobro = Cobro::find($id);
		return View::make('administracion.pages.cobros.editar')->with(array('cobro'=>$cobro, 'usuarioimg'=>$authuser->imagen, 'usuarionombre'=>$authuser->nombre, 'usuarioid'=>$authuser->id));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$authuser = Auth::user();
		$cobro = Cobro::find($id);
		$rules = array(
			'estado'      => 'required',
		);
		$validator = Validator::make(Input::all(), $rules);		
		
		if ($validator->fails()) {
			return Redirect::to('administracion/cobros/'.$id.'/edit')
				->withErrors($validator)->withInput();
		} else {
			$fechaExpiracion  = Input::get('fechaExpiracion');
			//Si la fechaExpiracion es cadena vacia o '(Por definir)' poner el campo de db en nulo
			if($fechaExpiracion == '' || $fechaExpiracion == '(Sin definir)'){
				$cobro->fechaExpiracion = null;
			}
			else{
				//Verificar que sea un date valido
				$rules = array(
						'fechaExpiracion' => 'date_format:d-M-Y'
				);
				$validator = \Validator::make(array('fechaExpiracion'=> $fechaExpiracion), $rules);
				if($validator->passes()){
					//Transform from current datetime zone to utc
					$utc_date ='';
					$fecPubString =$fechaExpiracion;
					$tj_date = DateTime::createFromFormat('d-M-Y',$fecPubString, new DateTimeZone('America/Tijuana'));
					$utc_date = $tj_date;
					$utc_date->setTimeZone(new DateTimeZone('UTC'));
					
					$myDateTime = DateTime::createFromFormat('d-M-Y', $cobro->fechaExpiracion);
					return 'myDateTime:'.$myDateTime. ' , fechaExp:'.$cobro->fechaExpiracion;
					$cobro->fechaExpiracion = $myDateTime;						
						
				} else {
					$errors = new MessageBag(['fechaExpiracion' => ['Wrong date format']]); 
					return Redirect::to('administracion/cobros/'.$id.'/edit')->withErrors($validator->messages())->withInput();	
				}
				
			}
		
			$cobro->estado = Input::get('estado');
			$cobro->save();
			
			return Redirect::to('administracion/cobros');	
		}
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
		return 'CobrosController.destroy('.$id.')';
	}


}
