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
		$Banners = DB::table('banners')->orderBy('seccion','asc')->paginate(10);
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
		return View::make('administracion.pages.banners.crear')->with(array('usuarioimg'=>$authuser->imagen, 'usuarionombre'=>$authuser->nombre, 'usuarioid'=>$authuser->id));
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//$proveedores_galeria = new Proveedor_galeria;
		//$proveedores_galeria->id=0;
		//$proveedores_galeria->proveedores_idproveedor=Input::get('idproveedor');
		//$fecha=''
		//$titulo=Input::get('titulo');
		//$idproveedor=Input::get('idproveedor');
		$authuser = Auth::user();
		if(!File::exists('images/banners/')) {
		    $result = File::makeDirectory('images/banners/', 0777);
		}
		

		$imagen_intro = Input::file('imagen');
		foreach($imagen_intro as $file) {
			$banner = new Banner;
		    $rules = array(
		        'file' => 'required|mimes:png,gif,jpeg,txt,pdf,doc,rtf|max:200000000'
		    );
		    $validator = \Validator::make(array('file'=> $file), $rules);
		    if($validator->passes()){

		        $id = Str::random(14);

		        $destinationPath    = 'images/banners/';
		        $filename           = $file->getClientOriginalName();
		        $mime_type          = $file->getMimeType();
		        $extension          = $file->getClientOriginalExtension();
		        $upload_success     = $file->move($destinationPath, $filename);

				$banner->id=0;
				$banner->usuario_id=1;
				$banner->banner_img=$filename;
				$banner->seccion=Input::get('seccion');
				$banner->save();
				unset($banner);
				//$proveedores_galeria->destroy(1);

		    } else {
		        //return Redirect::back()->with('error', 'I only accept images.');
		    }
		    
		}
		
		return Redirect::to("administracion/banners")->with(array('usuarioimg'=>$authuser->imagen, 'usuarionombre'=>$authuser->nombre, 'usuarioid'=>$authuser->id));
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
		$banner = Banner::find($id);
		//dd($eventos);

		$imagen_intro = Input::file('imagen');
		if(!empty($imagen_intro)){
			foreach($imagen_intro as $file) {
			    $rules = array(
			        'file' => 'required|mimes:png,gif,jpeg,txt,pdf,doc,rtf|max:200000000'
			    );
			    $validator = \Validator::make(array('file'=> $file), $rules);
			    if($validator->passes()){

			        $id = Str::random(14);

			        $destinationPath    = 'images/banners/';
			        $filename           = $file->getClientOriginalName();
			        $mime_type          = $file->getMimeType();
			        $extension          = $file->getClientOriginalExtension();
			        $upload_success     = $file->move($destinationPath, $filename);
			        $banner->banner_img=$filename;
					//$proveedores_galeria->destroy(1);

			    } else {
			        //return Redirect::back()->with('error', 'I only accept images.');
			    }
			    
			}
		}
				$banner->seccion=Input::get('seccion');
				$banner->save();
				unset($banner);	
				return Redirect::to("administracion/banners")->with(array('usuarioimg'=>$authuser->imagen, 'usuarionombre'=>$authuser->nombre, 'usuarioid'=>$authuser->id));			

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
		$banner = Banner::find($id);
		if($banner){
			$banner->delete();
		}
		return Redirect::to('administracion/banners')->with(array('usuarioimg'=>$authuser->imagen, 'usuarionombre'=>$authuser->nombre, 'usuarioid'=>$authuser->id));
		//
	}


}
