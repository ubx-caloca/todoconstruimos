<?php

class Galeria_subirController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

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
		$nombreDeUsuario=Input::get('nombreDeUsuario');
		$idproveedor=Input::get('idproveedor');
		if(!File::exists('images/proveedores/'.$nombreDeUsuario.'/galeria')) {
		    $result = File::makeDirectory('images/proveedores/'.$nombreDeUsuario.'/galeria', 0777);
		}
		

		$imagen_intro = Input::file('galeria');
		foreach($imagen_intro as $file) {
			$proveedores_galeria = new Proveedor_galeria;
		    $rules = array(
		        'file' => 'required|mimes:png,gif,jpeg,txt,pdf,doc,rtf|max:200000000'
		    );
		    $validator = \Validator::make(array('file'=> $file), $rules);
		    if($validator->passes()){

		        $id = Str::random(14);

		        $destinationPath    = 'images/proveedores/'.$nombreDeUsuario.'/galeria';
		        $filename           = $file->getClientOriginalName();
		        $mime_type          = $file->getMimeType();
		        $extension          = $file->getClientOriginalExtension();
		        $upload_success     = $file->move($destinationPath, $filename);

				$proveedores_galeria->id=0;
				$proveedores_galeria->proveedores_idproveedor=$idproveedor;		        
				$proveedores_galeria->imagen=$filename;
				$proveedores_galeria->save();
				unset($proveedores_galeria);
				//$proveedores_galeria->destroy(1);

		    } else {
		        //return Redirect::back()->with('error', 'I only accept images.');
		    }
		    
		}
		
		return Redirect::to("administracion/proveedores/galeria/$nombreDeUsuario/$idproveedor");
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
