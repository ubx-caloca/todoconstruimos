<?php

class eventosController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$authuser = Auth::user();
		//$listaDePost = Proveedor::paginate(15);
		$Eventos = DB::table('eventos')->orderBy('id','desc')->paginate(2);
		return View::make('administracion.pages.eventos.crear')->with(array('Eventos'=>$Eventos, 'usuarioimg'=>$authuser->imagen, 'usuarionombre'=>$authuser->nombre));
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
		//$proveedores_galeria = new Proveedor_galeria;
		//$proveedores_galeria->id=0;
		//$proveedores_galeria->proveedores_idproveedor=Input::get('idproveedor');
		//$fecha=''
		//$titulo=Input::get('titulo');
		//$idproveedor=Input::get('idproveedor');
		$authuser = Auth::user();
		if(!File::exists('images/eventos/')) {
		    $result = File::makeDirectory('images/eventos/', 0777);
		}
		

		$imagen_intro = Input::file('imagen');
		foreach($imagen_intro as $file) {
			$eventos = new Eventos;
		    $rules = array(
		        'file' => 'required|mimes:png,gif,jpeg,txt,pdf,doc,rtf|max:200000000'
		    );
		    $validator = \Validator::make(array('file'=> $file), $rules);
		    if($validator->passes()){

		        $id = Str::random(14);

		        $destinationPath    = 'images/eventos/';
		        $filename           = $file->getClientOriginalName();
		        $mime_type          = $file->getMimeType();
		        $extension          = $file->getClientOriginalExtension();
		        $upload_success     = $file->move($destinationPath, $filename);

				$eventos->id=0;
				$eventos->fecha=DB::raw('NOW()');
				$eventos->usuario=1;
				$eventos->titulo=Input::get('titulo');
				$eventos->fecha_evento=Input::get('fecha_evento');		
				$eventos->imagen=$filename;
				$eventos->contenido=Input::get('contenido');
				$eventos->save();
				unset($eventos);
				//$proveedores_galeria->destroy(1);

		    } else {
		        //return Redirect::back()->with('error', 'I only accept images.');
		    }
		    
		}
		
		return Redirect::to("administracion/eventos")->with(array('usuarioimg'=>$authuser->imagen, 'usuarionombre'=>$authuser->nombre));
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
		$evento = Eventos::find($id);
		return View::make('administracion.pages.eventos.editar')->with(array('evento'=>$evento, 'usuarioimg'=>$authuser->imagen, 'usuarionombre'=>$authuser->nombre));		
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
		$eventos = Eventos::find($id);
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

			        $destinationPath    = 'images/eventos/';
			        $filename           = $file->getClientOriginalName();
			        $mime_type          = $file->getMimeType();
			        $extension          = $file->getClientOriginalExtension();
			        $upload_success     = $file->move($destinationPath, $filename);
			        $eventos->imagen=$filename;
					//$proveedores_galeria->destroy(1);

			    } else {
			        //return Redirect::back()->with('error', 'I only accept images.');
			    }
			    
			}
		}
				$eventos->titulo=Input::get('titulo');
				$eventos->fecha_evento=Input::get('fecha_evento');						
				$eventos->contenido=Input::get('contenido');
				$eventos->save();
				unset($eventos);	
				return Redirect::to("administracion/eventos")->with(array('usuarioimg'=>$authuser->imagen, 'usuarionombre'=>$authuser->nombre));			

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
		$evento = Eventos::find($id);
		if($evento){
			$evento->delete();
		}
		return Redirect::to('administracion/eventos')->with(array('usuarioimg'=>$authuser->imagen, 'usuarionombre'=>$authuser->nombre));
		//
	}


}
