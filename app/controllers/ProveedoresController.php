<?php

class ProveedoresController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$listaDeProveedores = Proveedor::paginate(15);
		$authuser = Auth::user();
		return View::make('administracion.pages.proveedores.listar')->with(array('listaDeProveedores'=>$listaDeProveedores, 'usuarioimg'=>$authuser->imagen, 'usuarionombre'=>$authuser->nombre));
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
		$authuser = Auth::user();

		$proveedores = new Proveedor;
		$proveedores_detalle = new Proveedor_detalle;
		$proveedores_pago = new Proveedor_pago;

		$nombreDeUsuario = Input::get('nombre_usuario');

		$proveedores->id=0;
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

		$idproveedor = DB::getPdo()->lastInsertId();

		$proveedores_detalle->id=0;
		$proveedores_detalle->proveedores_idproveedor=$idproveedor;
		$proveedores_detalle->proveedores_proveedor_tipo_idproveedor_tipo=Input::get('proveedor_tipo_idproveedor_tipo');
		$proveedores_detalle->introduccion=Input::get('introduccion');
		$proveedores_detalle->descripcion=Input::get('descripcion');
		$proveedores_detalle->vision=Input::get('vision');
		$proveedores_detalle->productos=Input::get('productos');

		if(!File::exists('images/proveedores/'.$nombreDeUsuario)) {
		    $result = File::makeDirectory('images/proveedores/'.$nombreDeUsuario, 0777);
		}

		$imagen_intro = Input::file('imagen_intro');
		foreach($imagen_intro as $file) {
		    $rules = array(
		        'file' => 'required|mimes:png,gif,jpeg,txt,pdf,doc,rtf|max:20000'
		    );
		    $validator = \Validator::make(array('file'=> $file), $rules);
		    if($validator->passes()){

		        $id = Str::random(14);

		        $destinationPath    = 'images/proveedores/'.$nombreDeUsuario;
		        $filename           = $file->getClientOriginalName();
		        $mime_type          = $file->getMimeType();
		        $extension          = $file->getClientOriginalExtension();
		        $upload_success     = $file->move($destinationPath, $filename);
		    } else {
		        //return Redirect::back()->with('error', 'I only accept images.');
		    }
		}
		$proveedores_detalle->imagen_intro=$filename;


		$imagen_intro = Input::file('imagen_descripcion');
		foreach($imagen_intro as $file) {
		    $rules = array(
		        'file' => 'required|mimes:png,gif,jpeg,txt,pdf,doc,rtf|max:20000'
		    );
		    $validator = \Validator::make(array('file'=> $file), $rules);
		    if($validator->passes()){

		        $id = Str::random(14);

		        $destinationPath    = 'images/proveedores/'.$nombreDeUsuario;
		        $filename           = $file->getClientOriginalName();
		        $mime_type          = $file->getMimeType();
		        $extension          = $file->getClientOriginalExtension();
		        $upload_success     = $file->move($destinationPath, $filename);
		    } else {
		        //return Redirect::back()->with('error', 'I only accept images.');
		    }
		}		
		$proveedores_detalle->imagen_descripcion=$filename;


		$imagen_intro = Input::file('imagen_vision');
		foreach($imagen_intro as $file) {
		    $rules = array(
		        'file' => 'required|mimes:png,gif,jpeg,txt,pdf,doc,rtf|max:20000'
		    );
		    $validator = \Validator::make(array('file'=> $file), $rules);
		    if($validator->passes()){

		        $id = Str::random(14);

		        $destinationPath    = 'images/proveedores/'.$nombreDeUsuario;
		        $filename           = $file->getClientOriginalName();
		        $mime_type          = $file->getMimeType();
		        $extension          = $file->getClientOriginalExtension();
		        $upload_success     = $file->move($destinationPath, $filename);
		    } else {
		        //return Redirect::back()->with('error', 'I only accept images.');
		    }
		}				
		$proveedores_detalle->imagen_vision=$filename;
		$proveedores_detalle->save();


		
		$proveedores_pago->id=0;
		$proveedores_pago->proveedores_idproveedor = $idproveedor;
		$proveedores_pago->proveedores_proveedor_tipo_idproveedor_tipo = Input::get('proveedor_tipo_idproveedor_tipo');
		$proveedores_pago->fecha = DB::raw('NOW()');
		$proveedores_pago->save();

		return Redirect::to("administracion/proveedores/galeria/$nombreDeUsuario/$idproveedor")->with(array('usuarioimg'=>$authuser->imagen, 'usuarionombre'=>$authuser->nombre));		
		//return Redirect::route("/administracion/proveedores/galeria/{$nombreDeUsuario}/{$idproveedor}");
		//return Redirect::route('administracion/proveedores/galeria/', array('nombreDeUsuario' => $nombreDeUsuario, 'idproveedor'=>$idproveedor));
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
		$authuser = Auth::user();
		$proveedores = Proveedor::find($id);
		$proveedores_detalle = Proveedor_detalle::where('proveedores_idproveedor', '=', $id)->first();
		$listaTiposDeProveedores = array('NA' => 'Elige un tipo de proveedor')+TipoProveedor::lists('tipo','id');
		return View::make('administracion.pages.proveedores.editar')->with(array('listaTiposDeProveedores'=>$listaTiposDeProveedores,'proveedores'=>$proveedores,'proveedores_detalle'=>$proveedores_detalle, 'usuarioimg'=>$authuser->imagen, 'usuarionombre'=>$authuser->nombre));		
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
		$authuser = Auth::user();
		//$proveedores = new Proveedor;
		//$proveedores_detalle = new Proveedor_detalle;
		//$proveedores_pago = new Proveedor_pago;

		$formulario = Input::all();
		$proveedores = Proveedor::find($id);
		$proveedores_detalle = Proveedor_detalle::where('proveedores_idproveedor', '=', $id)->first();

		$nombreDeUsuario = Input::get('nombre_usuario');

		//$proveedores->id=0;
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

		$idproveedor = $id;

		//$proveedores_detalle->id=0;
		$proveedores_detalle->proveedores_idproveedor=$idproveedor;
		$proveedores_detalle->proveedores_proveedor_tipo_idproveedor_tipo=Input::get('proveedor_tipo_idproveedor_tipo');
		$proveedores_detalle->introduccion=Input::get('introduccion');
		$proveedores_detalle->descripcion=Input::get('descripcion');
		$proveedores_detalle->vision=Input::get('vision');
		$proveedores_detalle->productos=Input::get('productos');



			if(!File::exists('images/proveedores/'.$nombreDeUsuario)) {
			    $result = File::makeDirectory('images/proveedores/'.$nombreDeUsuario, 0777);
			}

			$imagen_intro = Input::file('imagen_intro');
			foreach($imagen_intro as $file) {
			    $rules = array(
			        'file' => 'required|mimes:png,gif,jpeg,txt,pdf,doc,rtf|max:20000'
			    );
			    $validator = \Validator::make(array('file'=> $file), $rules);
			    if($validator->passes()){

			        $id = Str::random(14);

			        $destinationPath    = 'images/proveedores/'.$nombreDeUsuario;
			        $filename           = $file->getClientOriginalName();
			        $mime_type          = $file->getMimeType();
			        $extension          = $file->getClientOriginalExtension();
			        $upload_success     = $file->move($destinationPath, $filename);
			        $proveedores_detalle->imagen_intro=$filename;
			    } else {
			        //return Redirect::back()->with('error', 'I only accept images.');
			    }
			}
			


			$imagen_intro = Input::file('imagen_descripcion');
			foreach($imagen_intro as $file) {
			    $rules = array(
			        'file' => 'required|mimes:png,gif,jpeg,txt,pdf,doc,rtf|max:20000'
			    );
			    $validator = \Validator::make(array('file'=> $file), $rules);
			    if($validator->passes()){

			        $id = Str::random(14);

			        $destinationPath    = 'images/proveedores/'.$nombreDeUsuario;
			        $filename           = $file->getClientOriginalName();
			        $mime_type          = $file->getMimeType();
			        $extension          = $file->getClientOriginalExtension();
			        $upload_success     = $file->move($destinationPath, $filename);
			        $proveedores_detalle->imagen_descripcion=$filename;
			    } else {
			        //return Redirect::back()->with('error', 'I only accept images.');
			    }

			}		
			



			$imagen_intro = Input::file('imagen_vision');
			foreach($imagen_intro as $file) {
			    $rules = array(
			        'file' => 'required|mimes:png,gif,jpeg,txt,pdf,doc,rtf|max:20000'
			    );
			    $validator = \Validator::make(array('file'=> $file), $rules);
			    if($validator->passes()){

			        $id = Str::random(14);

			        $destinationPath    = 'images/proveedores/'.$nombreDeUsuario;
			        $filename           = $file->getClientOriginalName();
			        $mime_type          = $file->getMimeType();
			        $extension          = $file->getClientOriginalExtension();
			        $upload_success     = $file->move($destinationPath, $filename);
			        $proveedores_detalle->imagen_vision=$filename;
			    } else {
			        //return Redirect::back()->with('error', 'I only accept images.');
			    }
			}				

		$proveedores_detalle->save();


		
		//$proveedores_pago->id=0;
		//$proveedores_pago->proveedores_idproveedor = $idproveedor;
		//$proveedores_pago->proveedores_proveedor_tipo_idproveedor_tipo = Input::get('proveedor_tipo_idproveedor_tipo');
		//$proveedores_pago->fecha = DB::raw('NOW()');
		//$proveedores_pago->save();

		return Redirect::to("administracion")->with(array('usuarioimg'=>$authuser->imagen, 'usuarionombre'=>$authuser->nombre));

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
