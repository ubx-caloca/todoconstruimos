<?php

class ProveedorGaleriaVistaController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$authuser = Auth::user();
		$proveedor = $authuser->proveedor;
		return View::make('vistausuario.pages.proveedores.galeria')->with(array('usuarioimg'=>$authuser->imagen, 'usuarionombre'=>$authuser->nombre, 'usuarioid'=>$authuser->id, 'proveedor'=>$proveedor));
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
		$authuser = Auth::user();
		$nombreDeUsuario=Input::get('nombreDeUsuario');
		$idproveedor=Input::get('idproveedor');
		if(!File::exists('images/proveedores/'.$nombreDeUsuario.'/galeria')) {
		    $result = File::makeDirectory('images/proveedores/'.$nombreDeUsuario.'/galeria', 0777);
		}
		
		$imagen_intro = Input::file('galeria');
		foreach($imagen_intro as $file) {
			$rules = array(
		        'file' => 'required|mimes:png,gif,jpeg|max:200000000'
		    );
		    $validator = Validator::make(array('file'=> $file), $rules);
			if ($validator->fails()) {
				return Redirect::to("vistausuario/proveedorgaleria")->with(array('usuarioimg'=>$authuser->imagen, 'usuarionombre'=>$authuser->nombre, 'usuarioid'=>$authuser->id))->withErrors($validator)->withInput();
			}
		}

		
		foreach($imagen_intro as $file) {
			$proveedores_galeria = new ProveedorGaleria;
			$id = Str::random(4);
			$date_now = new DateTime();

		    $destinationPath    = 'images/proveedores/'.$nombreDeUsuario.'/galeria';
		    $filename           = $date_now->format('YmdHis').$id;
		    $mime_type          = $file->getMimeType();
		    $extension          = $file->getClientOriginalExtension();
		    $upload_success     = $file->move($destinationPath, $filename.'.'.$extension);

			$proveedores_galeria->id=0;
			$proveedores_galeria->proveedores_idproveedor=$idproveedor;		        
			$proveedores_galeria->imagen=$filename.'.'.$extension;
			$proveedores_galeria->texto="";
			$proveedores_galeria->save();
			unset($proveedores_galeria);
		    
		}
		
		
		return Redirect::to("vistausuario/proveedorgaleria")->with(array('usuarioimg'=>$authuser->imagen, 'usuarionombre'=>$authuser->nombre, 'usuarioid'=>$authuser->id));
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
		return 'Edit del ProveedorGaleriaVistaController ('.$id.')';
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
//		$proveedorGaleria = Proveedor_galeria::find($id);
		//dd($blog);

		$descripcion = Input::get('descripcion');
		$idimagen = Input::get('idimagen');
		$idproveedor = Input::get('idproveedor');
		$eliminar = Input::get('eliminar');
		$premium = Input::get('premium');
		//echo sizeof($eliminar);
		
		if(!empty($descripcion)){
			$indice = 0;
			foreach($descripcion as $desc) {
					$proveedorGaleria = ProveedorGaleria::find($idimagen[$indice]);		
					$proveedorGaleria->texto=$desc;
					//$proveedorGaleria->premium=0;						
					$proveedorGaleria->save();
					unset($proveedorGaleria);	
					$indice++;
			}
		}
		
		if(!empty($eliminar)){
			$indice = 0;
			foreach($eliminar as $el) {
				$proveedorGaleria = ProveedorGaleria::find($el);
				$proveedor = $proveedorGaleria->proveedor;
				File::delete('images/proveedores/'.$proveedor->nombre_usuario.'/galeria/'.$proveedorGaleria->imagen);
				$proveedorGaleria->delete();
				unset($proveedorGaleria);
				$indice++;
			}		
		}
		
		if(!empty($premium)){
		
			$indice = 0;
			foreach($premium as $pre) {
				$proveedorGaleria = ProveedorGaleria::find($pre);
				$proveedorGaleria->premium=1;
				
				//Crear un pago pendiente
				//Generar row en cobros y cobros_pendientes
				$cobrotipoSerProveedor= CobroTipo::where('tipo', 'imagen_proveedor')->first();
				$cobro = new Cobro;
				$cobro->tipo_id = $cobrotipoSerProveedor->id;
				$cobro->usuario_id= $authuser->id;
				$cobro->estado= 'pendiente';
				$cobro->datosAdicionales = $proveedorGaleria->id;
				$cobro->save();
		
				$id = Str::random(4);
				$date_now = new DateTime();
				$cobrop = new CobroPendiente;
				$cobrop->cobro_id = $cobro->id;
				$cobrop->fecha = $date_now;
				$cobrop->cobro_concepto = 'TODCONS'.$cobro->id . 'PROVIMG'.$proveedorGaleria->id.$date_now->format('YmdHi').$id; // Concepto = clave_empresa+ clave_cobro+ clave_tipo_cobro + clave_objeto_de_cobro + fecha+4_digitos_random (Por favor mejorar!!)
				$cobrop->save();		
								
				
				
				$proveedorGaleria->save();
				unset($proveedorGaleria);
				$indice++;
			}	
		
		}		
		return Redirect::to("vistausuario/proveedorgaleria")->with(array('usuarioimg'=>$authuser->imagen, 'usuarionombre'=>$authuser->nombre, 'usuarioid'=>$authuser->id));
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
