<?php

class bannersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$authuser = Auth::user();
		//$listaDePost = Proveedor::paginate(15);
		$Banners = Banner::orderBy('seccion','asc')->paginate(10);
		return View::make('administracion.pages.banners.index')->with(array('Banners'=>$Banners, 'usuarioimg'=>$authuser->imagen, 'usuarionombre'=>$authuser->nombre, 'usuarioid'=>$authuser->id));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$authuser = Auth::user();
		$rolnormal = UsuarioRol::where('rol', '=', 'usuario normal')->firstOrFail();
		$usuariosnormales = $rolnormal->usuarios;
		$listaUsuarios= array();
		foreach($usuariosnormales as $usuarion){
			$listaUsuarios[$usuarion->id] = $usuarion->id.': '.$usuarion->email;
		}
		
		
		return View::make('administracion.pages.banners.crear')->with(array('usuarioimg'=>$authuser->imagen, 'usuarionombre'=>$authuser->nombre, 'usuarioid'=>$authuser->id, 'listaUsuarios'=>$listaUsuarios));
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$authuser = Auth::user();
		if(!File::exists('images/banners/')) {
		    $result = File::makeDirectory('images/banners/', 0777);
		}
		$rules = array(
			'seccion'      => 'required',
			'usuario_id'   => 'required',
			'imagen' => 'required|mimes:png,gif,jpeg|max:200000000'
		);
		$validator = Validator::make(Input::all(), $rules);		
		
		if ($validator->fails()) {
			return Redirect::to('administracion/banners/create')
				->withErrors($validator)->withInput();
		} else {	
			$file = Input::file('imagen');
			$id = Str::random(4);
			$date_now = new DateTime();

		    $destinationPath    = 'images/banners/';
		    $filename           = $date_now->format('YmdHis').$id;
		    $mime_type          = $file->getMimeType();
		    $extension          = $file->getClientOriginalExtension();
		    $upload_success     = $file->move($destinationPath, $filename.'.'.$extension);
				
			$banner = new Banner;
			$banner->usuario_id=Input::get('usuario_id');
			$banner->banner_img=$filename.'.'.$extension;
			$banner->solicitar_habilitar = 1;
			$banner->habilitar = 0;
			$banner->link = Input::get('link');
			$banner->seccion=Input::get('seccion');
			$banner->save();

			
			$cobrotipoBanner= CobroTipo::where('tipo', 'BANNER-'.Input::get('seccion'))->first();
			$cobro = new Cobro;
			$cobro->tipo_id = $cobrotipoBanner->id;
			$cobro->usuario_id= Input::get('usuario_id');
			$cobro->estado= 'pendiente';
			$cobro->datosAdicionales = $banner->id; 
			$cobro->save();
		
			$id = Str::random(4);
			$date_now = new DateTime();
			$cobrop = new CobroPendiente;
			$cobrop->cobro_id = $cobro->id;
			$cobrop->fecha = $date_now;
			$cobrop->cobro_concepto = 'TODCONS'.$cobro->id . 'BANN'.$banner->id.$date_now->format('YmdHi').$id; // Concepto = clave_empresa+ clave_cobro+ clave_tipo_cobro + clave_objeto_de_cobro + fecha+4_digitos_random (Por favor mejorar!!)
			$cobrop->save();						
				
			return Redirect::to("administracion/banners")->with(array('usuarioimg'=>$authuser->imagen, 'usuarionombre'=>$authuser->nombre, 'usuarioid'=>$authuser->id));
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
		$banner = Banner::find($id);
		return View::make('administracion.pages.banners.editar')->with(array('banner'=>$banner, 'usuarioimg'=>$authuser->imagen, 'usuarionombre'=>$authuser->nombre, 'usuarioid'=>$authuser->id));		
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
		if(!File::exists('images/banners/')) {
		    $result = File::makeDirectory('images/banners/', 0777);
		}
		$rules = array(
			'seccion'      => 'required',
			'imagen' => 'mimes:png,gif,jpeg|max:200000000'
		);
		$validator = Validator::make(Input::all(), $rules);		
		
		if ($validator->fails()) {
			return Redirect::to('administracion/banners/editar/'.$id)
				->withErrors($validator)->withInput();
		} else {	
			$banner = Banner::find($id);
			if(Input::hasFile('imagen')){
						
			File::delete('images/banners/'.$banner->banner_img);
			
			$file = Input::file('imagen');
			$id = Str::random(4);
			$date_now = new DateTime();

		    $destinationPath    = 'images/banners/';
		    $filename           = $date_now->format('YmdHis').$id;
		    $mime_type          = $file->getMimeType();
		    $extension          = $file->getClientOriginalExtension();
		    $upload_success     = $file->move($destinationPath, $filename.'.'.$extension);
				
			
			$banner->banner_img=$filename.'.'.$extension;
			}
			$banner->link = Input::get('link');
			$banner->seccion = Input::get('seccion');
			$banner->save();

				return Redirect::to("administracion/banners")->with(array('usuarioimg'=>$authuser->imagen, 'usuarionombre'=>$authuser->nombre, 'usuarioid'=>$authuser->id));
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
		$authuser = Auth::user();
		$banner =Banner::find($id);

		$img = $banner->imagen;
		File::delete('images/banners/'.$img);
		//TODO: Borrar cobro asociado
		
		$banner->delete();

		// redirect
		Session::flash('message', 'El banner ha sido eliminado exitosamente!');
		return Redirect::to('administracion/banners')->with(array('usuarioimg'=>$authuser->imagen, 'usuarionombre'=>$authuser->nombre, 'usuarioid'=>$authuser->id));
		//
	}


}
