<?php

class ProveedorVistaController extends \BaseController {

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
		$authuser = Auth::user();
		$listaTiposDeProveedores = array('NA' => 'Elige un tipo de proveedor')+ProveedorTipo::lists('tipo','id');
		return View::make('vistausuario.pages.proveedores.nuevo')->with(array('listaTiposDeProveedores'=>$listaTiposDeProveedores, 'usuarioimg'=>$authuser->imagen, 'usuarionombre'=>$authuser->nombre, 'usuarioid'=>$authuser->id));
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$authuser = Auth::user();
		$rules = array(
			'proveedor_tipo'       => 'not_in:NA',
			'nombre_usuario'      => 'required',
			'nombre' => 'required',
			//'direccion' => 'required',
			//'telefono' => 'required',
			//'facebook' => 'required',
			//'twitter' => 'required',
			//'otro_sns' => 'required',
			'longitud' => 'required|numeric',
			'latitud' => 'required|numeric',
			'introduccion' => 'required',
			'descripcion' => 'required',
			'vision' => 'required',
			'productos' => 'required',
			'imagen_intro' => 'mimes:png,gif,jpeg|max:20000',
			'imagen_descripcion' => 'mimes:png,gif,jpeg|max:20000',
			'imagen_vision' => 'mimes:png,gif,jpeg|max:20000',	
		);
		$validator = Validator::make(Input::all(), $rules);		
		
		if ($validator->fails()) {
			return Redirect::to('vistausuario/proveedor/create')
				->withErrors($validator)->withInput();
		} else {
		
		$proveedores = new Proveedor;
		$proveedores_detalle = new ProveedorDetalle;

		$nombreDeUsuario = Input::get('nombre_usuario');

		$proveedores->id=0;
		$proveedores->proveedor_tipo_idproveedor_tipo=Input::get('proveedor_tipo');
		$proveedores->nombre_usuario=Input::get('nombre_usuario');
		$proveedores->nombre=Input::get('nombre');
		$proveedores->direccion=Input::get('direccion');
		$proveedores->telefono=Input::get('telefono');
		$proveedores->facebook=Input::get('facebook');
		$proveedores->twitter=Input::get('twitter');
		$proveedores->otro_sns=Input::get('otro_sns');
		$proveedores->longitud=Input::get('longitud');
		$proveedores->latitud=Input::get('latitud');
		$proveedores->habilitar = 0;
		$proveedores->solicitar_premium= 0;
		$proveedores->usuario_id = $authuser->id;
		$proveedores->save();

		$idproveedor = $proveedores->id;

		$proveedores_detalle->id=0;
		$proveedores_detalle->proveedores_idproveedor=$idproveedor;
		$proveedores_detalle->proveedores_proveedor_tipo_idproveedor_tipo=Input::get('proveedor_tipo_idproveedor_tipo');
		$proveedores_detalle->introduccion=Input::get('introduccion');
		$proveedores_detalle->descripcion=Input::get('descripcion');
		$proveedores_detalle->vision=Input::get('vision');
		$proveedores_detalle->productos=Input::get('productos');
		$proveedores_detalle->proveedores_proveedor_tipo_idproveedor_tipo = Input::get('proveedor_tipo');

		if(!File::exists('images/proveedores/'.$nombreDeUsuario)) {
		    $result = File::makeDirectory('images/proveedores/'.$nombreDeUsuario, 0777);
		}

		$imagen_intro = Input::file('imagen_intro');
		$file = $imagen_intro;
		$rules = array(
		    'file' => 'required|mimes:png,gif,jpeg|max:20000'
		);
		$validator = \Validator::make(array('file'=> $file), $rules);
		if($validator->passes()){

			$id = Str::random(4);
			$date_now = new DateTime();

		    $destinationPath    = 'images/proveedores/'.$nombreDeUsuario;
		    $filename           = $date_now->format('YmdHis').$id;
		    $mime_type          = $file->getMimeType();
		    $extension          = $file->getClientOriginalExtension();
		    $upload_success     = $file->move($destinationPath, $filename.'.'.$extension);
			$proveedores_detalle->imagen_intro=$filename.'.'.$extension;
		} else {
		    $proveedores_detalle->imagen_intro = '';
		}
		

		$imagen_descripcion = Input::file('imagen_descripcion');
		$file = $imagen_descripcion;
		$rules = array(
		    'file' => 'required|mimes:png,gif,jpeg|max:20000'
		);
		$validator = \Validator::make(array('file'=> $file), $rules);
		if($validator->passes()){

		    $id = Str::random(4);
			$date_now = new DateTime();

		    $destinationPath    = 'images/proveedores/'.$nombreDeUsuario;
		    $filename           = $date_now->format('YmdHis').$id;
		    $mime_type          = $file->getMimeType();
		    $extension          = $file->getClientOriginalExtension();
		    $upload_success     = $file->move($destinationPath, $filename.'.'.$extension);
			$proveedores_detalle->imagen_descripcion=$filename.'.'.$extension;
		} else {
			$proveedores_detalle->imagen_descripcion='';
		}	
		


		$imagen_vision = Input::file('imagen_vision');
		$file = $imagen_vision;
		$rules = array(
		    'file' => 'required|mimes:png,gif,jpeg|max:20000'
		);
		$validator = \Validator::make(array('file'=> $file), $rules);
		if($validator->passes()){

		    $id = Str::random(4);
			$date_now = new DateTime();

		    $destinationPath    = 'images/proveedores/'.$nombreDeUsuario;
		    $filename           = $date_now->format('YmdHis').$id;
		    $mime_type          = $file->getMimeType();
		    $extension          = $file->getClientOriginalExtension();
		    $upload_success     = $file->move($destinationPath, $filename.'.'.$extension);
			$proveedores_detalle->imagen_vision=$filename.'.'.$extension;
		} else {
			$proveedores_detalle->imagen_vision='';
		}				
		
		$proveedores_detalle->save();

		return Redirect::to("vistausuario/")->with(array('usuarioimg'=>$authuser->imagen, 'usuarionombre'=>$authuser->nombre, 'usuarioid'=>$authuser->id));		
		}
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
		$listaTiposDeProveedores = array('NA' => 'Elige un tipo de proveedor')+ProveedorTipo::lists('tipo','id');
		$proveedor = Proveedor::find($id);
		$proveedordetalle = $proveedor->detalle;
		return View::make('vistausuario.pages.proveedores.editar')->with(array('listaTiposDeProveedores'=>$listaTiposDeProveedores, 'usuarioimg'=>$authuser->imagen, 'usuarionombre'=>$authuser->nombre, 'usuarioid'=>$authuser->id, 'proveedor'=>$proveedor, 'proveedordetalle'=>$proveedordetalle));		
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
		$authuser = Auth::user();
		$rules = array(
			'proveedor_tipo'       => 'not_in:NA',
			//'nombre_usuario'      => 'required',
			'nombre' => 'required',
			//'direccion' => 'required',
			//'telefono' => 'required',
			//'facebook' => 'required',
			//'twitter' => 'required',
			//'otro_sns' => 'required',
			'longitud' => 'required|numeric',
			'latitud' => 'required|numeric',
			'introduccion' => 'required',
			'descripcion' => 'required',
			'vision' => 'required',
			'productos' => 'required',
			'imagen_intro' => 'mimes:png,gif,jpeg|max:20000',
			'imagen_descripcion' => 'mimes:png,gif,jpeg|max:20000',
			'imagen_vision' => 'mimes:png,gif,jpeg|max:20000',	
		);
		$validator = Validator::make(Input::all(), $rules);		
		
		if ($validator->fails()) {
			$listaTiposDeProveedores = array('NA' => 'Elige un tipo de proveedor')+ProveedorTipo::lists('tipo','id');
			return View::make('vistausuario.pages.proveedores.editar')->with(array('listaTiposDeProveedores'=>$listaTiposDeProveedores, 'usuarioimg'=>$authuser->imagen, 'usuarionombre'=>$authuser->nombre, 'usuarioid'=>$authuser->id, 'proveedor'=>$proveedor, 'proveedordetalle'=>$proveedordetalle))->withErrors($validator)->withInput();
		} else {
		
		$proveedores = Proveedor::find($id);
		$proveedores_detalle = $proveedores->detalle;

		$nombreDeUsuario = Input::get('nombre_usuario');

		$proveedores->proveedor_tipo_idproveedor_tipo=Input::get('proveedor_tipo_idproveedor_tipo');
		$proveedores->nombre_usuario=Input::get('nombre_usuario');
		$proveedores->nombre=Input::get('nombre');
		$proveedores->direccion=Input::get('direccion');
		$proveedores->telefono=Input::get('telefono');
		$proveedores->facebook=Input::get('facebook');
		$proveedores->twitter=Input::get('twitter');
		$proveedores->otro_sns=Input::get('otro_sns');
		$proveedores->longitud=Input::get('longitud');
		$proveedores->latitud=Input::get('latitud');
		$proveedores->save();

		$proveedores_detalle->proveedores_proveedor_tipo_idproveedor_tipo=Input::get('proveedor_tipo_idproveedor_tipo');
		$proveedores_detalle->introduccion=Input::get('introduccion');
		$proveedores_detalle->descripcion=Input::get('descripcion');
		$proveedores_detalle->vision=Input::get('vision');
		$proveedores_detalle->productos=Input::get('productos');

		if(!File::exists('images/proveedores/'.$nombreDeUsuario)) {
		    $result = File::makeDirectory('images/proveedores/'.$nombreDeUsuario, 0777);
		}

		$imagen_intro = Input::file('imagen_intro');
		$file = $imagen_intro;
		$rules = array(
		    'file' => 'required|mimes:png,gif,jpeg|max:20000'
		);
		$validator = \Validator::make(array('file'=> $file), $rules);
		if($validator->passes()){
		
			//Borrar imagen antigua si existe
			if($proveedores_detalle->imagen_intro!=null && $proveedores_detalle->imagen_intro!="")
				if (File::exists('images/proveedores/'.$proveedores->nombre_usuario.'/'.$proveedores_detalle->imagen_intro))
					File::delete('images/proveedores/'.$proveedores->nombre_usuario.'/'.$proveedores_detalle->imagen_intro);
				
			$id = Str::random(4);
			$date_now = new DateTime();

		    $destinationPath    = 'images/proveedores/'.$nombreDeUsuario;
		    $filename           = $date_now->format('YmdHis').$id;
		    $mime_type          = $file->getMimeType();
		    $extension          = $file->getClientOriginalExtension();
		    $upload_success     = $file->move($destinationPath, $filename.'.'.$extension);
			$proveedores_detalle->imagen_intro=$filename.'.'.$extension;
		} else {
		}
		

		$imagen_descripcion = Input::file('imagen_descripcion');
		$file = $imagen_descripcion;
		$rules = array(
		    'file' => 'required|mimes:png,gif,jpeg|max:20000'
		);
		$validator = \Validator::make(array('file'=> $file), $rules);
		if($validator->passes()){
		
			if($proveedores_detalle->imagen_descripcion!=null && $proveedores_detalle->imagen_descripcion!="")
				if (File::exists('images/proveedores/'.$proveedores->nombre_usuario.'/'.$proveedores_detalle->imagen_descripcion))
					File::delete('images/proveedores/'.$proveedores->nombre_usuario.'/'.$proveedores_detalle->imagen_descripcion);

		    $id = Str::random(4);
			$date_now = new DateTime();

		    $destinationPath    = 'images/proveedores/'.$nombreDeUsuario;
		    $filename           = $date_now->format('YmdHis').$id;
		    $mime_type          = $file->getMimeType();
		    $extension          = $file->getClientOriginalExtension();
		    $upload_success     = $file->move($destinationPath, $filename.'.'.$extension);
			$proveedores_detalle->imagen_descripcion=$filename.'.'.$extension;
		} else {
		}	
		


		$imagen_vision = Input::file('imagen_vision');
		$file = $imagen_vision;
		$rules = array(
		    'file' => 'required|mimes:png,gif,jpeg|max:20000'
		);
		$validator = \Validator::make(array('file'=> $file), $rules);
		if($validator->passes()){
		
			if($proveedores_detalle->imagen_vision!=null && $proveedores_detalle->imagen_vision!="")
				if (File::exists('images/proveedores/'.$proveedores->nombre_usuario.'/'.$proveedores_detalle->imagen_vision))
					File::delete('images/proveedores/'.$proveedores->nombre_usuario.'/'.$proveedores_detalle->imagen_vision);


		    $id = Str::random(4);
			$date_now = new DateTime();

		    $destinationPath    = 'images/proveedores/'.$nombreDeUsuario;
		    $filename           = $date_now->format('YmdHis').$id;
		    $mime_type          = $file->getMimeType();
		    $extension          = $file->getClientOriginalExtension();
		    $upload_success     = $file->move($destinationPath, $filename.'.'.$extension);
			$proveedores_detalle->imagen_vision=$filename.'.'.$extension;
		} else {
		}				
		
		$proveedores_detalle->save();

		return Redirect::to("vistausuario/")->with(array('usuarioimg'=>$authuser->imagen, 'usuarionombre'=>$authuser->nombre, 'usuarioid'=>$authuser->id));		
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
	}


}
