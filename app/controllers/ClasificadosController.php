<?php

class ClasificadosController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$listaDeClasificados = Clasificado::paginate(15);
		$listaDeCategorias = ClasificadoCategoria::all();
		return View::make('administracion.pages.clasificados.index')->with('listaDeClasificados',$listaDeClasificados)->with('listaDeCategorias',$listaDeCategorias);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		$listaCategoriasClasificados = array('NA' => 'Elige una categoria para el clasificado')+ClasificadoCategoria::lists('categoria','id');
		return View::make('administracion.pages.clasificados.nuevo')->with('listaCategoriasClasificados',$listaCategoriasClasificados);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// validate
		// read more on validation at http://laravel.com/docs/validation
		
		
		$rules = array(
			'categoria_id'       => 'required|numeric',
			'clasf_titulo'      => 'required',
			'clasf_descripcion' => 'required',
			'clasf_precio' => 'numeric'
		);
		$validator = Validator::make(Input::all(), $rules);		
		
		if ($validator->fails()) {
			return Redirect::to('administracion/clasificados/create')
				->withErrors($validator)->withInput();
		} else {
			// store
			$clas_imagenes = Input::file('imagenes');	
			$imagenes_error = array();
			if($clas_imagenes[0]!= NULL){
				foreach($clas_imagenes as $file) {
					$rules = array(
						'file' => 'required|mimes:png,gif,jpeg,txt,pdf,doc,rtf|max:20000'
					);
					$validator = \Validator::make(array('file'=> $file), $rules);
					if($validator->passes()){
						$imagenes_error[] = false;
					} else {
						$imagenes_error[] = true;
						//return Redirect::to('administracion/clasificados/create')
						//	->withErrors($validator);
						//break;
					}
				}
			}
						
			$clasificado = new Clasificado;
			$clasificado->categoria_id       = Input::get('categoria_id');
			$clasificado->titulo      = Input::get('clasf_titulo');
			$clasificado->descripcion = Input::get('clasf_descripcion');
			$clasificado->premium = Input::get('clasf_premium');
			$clasificado->precio = Input::get('clasf_precio');
			$clasificado->moneda = Input::get('clasf_moneda');
			$clasificado->habilitar = Input::get('clasf_habilitar');
			$clasificado->fecha_publicacion = new DateTime();
			$usuario_id = Session::get('usuario_id', function() { return 1; });
			$clasificado->usuario_id = $usuario_id;
			$clasificado->save();
			
			
			if(!File::exists('images/clasificados')) {
				$result = File::makeDirectory('images/clasificados', 0777);
			}
			
			$clas_imagenes = Input::file('imagenes');
			$i = 0;
			if($clas_imagenes[0]!= NULL){
				foreach($clas_imagenes as $file) {
					if($imagenes_error[$i] == false){			
						$id = Str::random(4);
						$date_now = new DateTime();

						$destinationPath    = 'images/clasificados/';
						$filename           = $date_now->format('YmdHis').$id;
						$mime_type          = $file->getMimeType();
						$extension          = $file->getClientOriginalExtension();
						$upload_success     = $file->move($destinationPath, $filename.'.'.$extension);
					
						$clasificado_img = new ClasificadoImagen;
						$clasificado_img->clasificado_id = $clasificado->id;
						$clasificado_img->nombre_imagen = $filename.'.'.$extension;
					
						$clasificado_img->save();
					}
				$i = $i+1;
				}
			}
			$resString = 'Clasificado creado exitosamente!';
			$countImgErr = 0;
			foreach($imagenes_error as $img_err){
				if($img_err == true){
					$countImgErr = $countImgErr+1;
				}
			}
			if($countImgErr>0){
				if($countImgErr==1)
					$resString = $resString.' ('.$countImgErr.' imagen no se agregó por tener un error)'; 
				else
					$resString = $resString.' ('.$countImgErr.' imagenes no se agregaron por tener un error)'; 
			}
			Session::flash('message', $resString);
			return Redirect::to('administracion/clasificados');	
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
				return 'Aqui esta show '.$id;
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$clasificado = Clasificado::find($id);
		$imgg = $clasificado->imagenes;
		
		//return  gettype ( $clasificado->fecha_publicacion ). ' '. $clasificado->fecha_publicacion;
		$listaCategoriasClasificados = array('NA' => 'Elige una categoria para el clasificado')+ClasificadoCategoria::lists('categoria','id');
		return View::make('administracion.pages.clasificados.editar')->with('listaCategoriasClasificados',$listaCategoriasClasificados)->with('clasificado',$clasificado)->with('imagenes',$imgg);		
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
		$rules = array(
			'categoria_id'       => 'required|numeric',
			'clasf_titulo'      => 'required',
			'clasf_descripcion' => 'required',
			'clasf_precio' => 'numeric',
			'clasf_fechapub' => 'date'
		);
		$validator = Validator::make(Input::all(), $rules);		
		
		if ($validator->fails()) {
			return Redirect::to('administracion/clasificados/'.$id.'/edit')
				->withErrors($validator)->withInput();
		} else {
			// store
			$clas_imagenes = Input::file('imagenes');	
			$imagenes_error = array();
			if($clas_imagenes[0]!= NULL){
				foreach($clas_imagenes as $file) {
					$rules = array(
						'file' => 'required|mimes:png,gif,jpeg,txt,pdf,doc,rtf|max:20000'
					);
					$validator = \Validator::make(array('file'=> $file), $rules);
					if($validator->passes()){
						$imagenes_error[] = false;
					} else {
						$imagenes_error[] = true;
					}
				}
			}
						
			$clasificado =  Clasificado::find($id);
			$clasificado->categoria_id       = Input::get('categoria_id');
			$clasificado->titulo      = Input::get('clasf_titulo');
			$clasificado->descripcion = Input::get('clasf_descripcion');
			$clasificado->premium = Input::get('clasf_premium');
			$clasificado->precio = Input::get('clasf_precio');
			$clasificado->moneda = Input::get('clasf_moneda');
			$clasificado->habilitar = Input::get('clasf_habilitar');
			
			$utc_date ='';
			if(Input::get('clasf_fechapub') != '' ){
				$fecPubString = Input::get('clasf_fechapub');
				$tj_date = new DateTime($fecPubString, new DateTimeZone('America/Tijuana'));

				$utc_date = $tj_date;
				$utc_date->setTimeZone(new DateTimeZone('UTC'));
			}

			
			$clasificado->fecha_publicacion = $utc_date;
			$usuario_id = Session::get('usuario_id', function() { return 1; });
			$clasificado->usuario_id = $usuario_id;
			$clasificado->save();
			
			
			if(!File::exists('images/clasificados')) {
				$result = File::makeDirectory('images/clasificados', 0777);
			}
			
			$clas_imagenes = Input::file('imagenes');
			$countImgErr = 0;
			foreach($imagenes_error as $img_err){
				if($img_err == true){
					$countImgErr = $countImgErr+1;
				}
			}
			$i = 0;
			if($clas_imagenes[0]!= NULL){
				if($countImgErr==0){ //if all uploaded pics validated
				//Primero borrar las imagenes actuales del clasificado
				$imagenesactuales = $clasificado->imagenes;
				foreach($imagenesactuales as $imagen){
					File::delete('images/clasificados/'.$imagen->nombre_imagen);
					$imagen->delete();
				}
			
				foreach($clas_imagenes as $file) {
					if($imagenes_error[$i] == false){			
						$id = Str::random(4);
						$date_now = new DateTime();

						$destinationPath    = 'images/clasificados/';
						$filename           = $date_now->format('YmdHis').$id;
						$mime_type          = $file->getMimeType();
						$extension          = $file->getClientOriginalExtension();
						$upload_success     = $file->move($destinationPath, $filename.'.'.$extension);
					
						$clasificado_img = new ClasificadoImagen;
						$clasificado_img->clasificado_id = $clasificado->id;
						$clasificado_img->nombre_imagen = $filename.'.'.$extension;
					
						$clasificado_img->save();
					}
				$i = $i+1;
				}
				}
			}
			$resString = 'Clasificado editado exitosamente!';
			Session::flash('message', $resString);
			return Redirect::to('administracion/clasificados');	
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
		$clasificado = Clasificado::find($id);
		//return $clasificado;
		$imagenes = $clasificado->imagenes;
		$del = '';
		foreach($imagenes as $imagen){
			File::delete('images/clasificados/'.$imagen->nombre_imagen);
			//$del = $del.$imagen->nombre_imagen. ', ';
			//$imagen->delete();
		}
		$clasificado->delete();

		// redirect
		Session::flash('message', 'El clasificado ha sido eliminado exitosamente!');
		return Redirect::to('administracion/clasificados');
		
	}


}
