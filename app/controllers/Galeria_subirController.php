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
		$authuser = Auth::user();
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
			$proveedores_galeria = new ProveedorGaleria;
		    $rules = array(
		        'file' => 'required|mimes:png,gif,jpeg|max:200000000'
		    );
		    $validator = \Validator::make(array('file'=> $file), $rules);
		    if($validator->passes()){

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
				//$proveedores_galeria->destroy(1);

		    } else {
		        //return Redirect::back()->with('error', 'I only accept images.');
		    }
		    
		}
		
		return Redirect::to("administracion/proveedores/galeria/$nombreDeUsuario/$idproveedor")->with(array('usuarioimg'=>$authuser->imagen, 'usuarionombre'=>$authuser->nombre, 'usuarioid'=>$authuser->id));
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
				//$proveedor = $el->proveedor;
				//File::delete('images/proveedores/'.$proveedor->nombre_usuario.'/galeria/'.$el->imagen);
				$proveedorGaleria->delete();
				unset($proveedorGaleria);
				$indice++;
			}		
		}
		if(!empty($premium)){
			$indice = 0;
			foreach($premium as $pre) {
				$proveedorGaleria = ProveedorGaleria::find($pre);
				//echo "<br><br>--->$proveedorGaleria->premium";
				if($proveedorGaleria->premium==0){
					$proveedorGaleria->premium=1;
					$proveedorGaleria->save();
				}
				unset($proveedorGaleria);
				$indice++;
			}		
		}		
		return Redirect::to("administracion/proveedores/listar")->with(array('usuarioimg'=>$authuser->imagen, 'usuarionombre'=>$authuser->nombre, 'usuarioid'=>$authuser->id));			
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

	public function listarGaleriaPremium()
	{
		//$clasificadosvip = Clasificado::where('premium', '=', 1)->where('habilitar', '=', 1)->orderBy('fecha_publicacion','DESC')->get();
		$proveedores_galeria = ProveedorGaleria::where('premium', '=', 1)->get();
		$authuser = Auth::user();	
		return View::make('administracion.pages.proveedores.listarGaleriaPremium')->with(array('proveedores_galeria' => $proveedores_galeria,'usuarioimg'=>$authuser->imagen, 'usuarionombre'=>$authuser->nombre, 'usuarioid'=>$authuser->id));
		//
	}

	public function autorizarGaleriaPremium()
	{
		//
		$authuser = Auth::user();
//		$proveedorGaleria = Proveedor_galeria::find($id);
		//dd($blog);
		$premium = Input::get('premium');
		//echo sizeof($eliminar);
		if(!empty($premium)){
			$indice = 0;
			foreach($premium as $pre) {
				$proveedorGaleria = ProveedorGaleria::find($pre);
				$proveedorGaleria->premium=2;
				$proveedorGaleria->save();
				unset($proveedorGaleria);
				$indice++;
			}		
		}		
		return Redirect::to("administracion/")->with(array('usuarioimg'=>$authuser->imagen, 'usuarionombre'=>$authuser->nombre, 'usuarioid'=>$authuser->id));			
	}


}
