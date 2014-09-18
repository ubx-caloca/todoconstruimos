<?php

class blogController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$authuser = Auth::user();
		//$listaDePost = Proveedor::paginate(15);
		$Posts = DB::table('blog')->orderBy('id','desc')->paginate(2);
		return View::make('administracion.pages.blog.crear')->with(array('Posts'=>$Posts, 'usuarioimg'=>$authuser->imagen, 'usuarionombre'=>$authuser->nombre));
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
		if(!File::exists('images/blog/')) {
		    $result = File::makeDirectory('images/blog/', 0777);
		}
		

		$imagen_intro = Input::file('imagen');
		foreach($imagen_intro as $file) {
			$blog = new Blog;
		    $rules = array(
		        'file' => 'required|mimes:png,gif,jpeg,txt,pdf,doc,rtf|max:200000000'
		    );
		    $validator = \Validator::make(array('file'=> $file), $rules);
		    if($validator->passes()){

		        $id = Str::random(14);

		        $destinationPath    = 'images/blog/';
		        $filename           = $file->getClientOriginalName();
		        $mime_type          = $file->getMimeType();
		        $extension          = $file->getClientOriginalExtension();
		        $upload_success     = $file->move($destinationPath, $filename);

				$blog->id=0;
				$blog->fecha=DB::raw('NOW()');
				$blog->usuario=1;
				$blog->titulo=Input::get('titulo');		
				$blog->imagen=$filename;
				$blog->contenido=Input::get('contenido');
				$blog->save();
				unset($blog);
				//$proveedores_galeria->destroy(1);

		    } else {
		        //return Redirect::back()->with('error', 'I only accept images.');
		    }
		    
		}
		
		return Redirect::to("administracion/blog")->with(array('usuarioimg'=>$authuser->imagen, 'usuarionombre'=>$authuser->nombre));
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
		$post = Blog::find($id);
		return View::make('administracion.pages.blog.editar')->with(array('post'=>$post, 'usuarioimg'=>$authuser->imagen, 'usuarionombre'=>$authuser->nombre));		
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
		$blog = Blog::find($id);
		//dd($blog);

		$imagen_intro = Input::file('imagen');
		if(!empty($imagen_intro)){
			foreach($imagen_intro as $file) {
			    $rules = array(
			        'file' => 'required|mimes:png,gif,jpeg,txt,pdf,doc,rtf|max:200000000'
			    );
			    $validator = \Validator::make(array('file'=> $file), $rules);
			    if($validator->passes()){

			        $id = Str::random(14);

			        $destinationPath    = 'images/blog/';
			        $filename           = $file->getClientOriginalName();
			        $mime_type          = $file->getMimeType();
			        $extension          = $file->getClientOriginalExtension();
			        $upload_success     = $file->move($destinationPath, $filename);
			        $blog->imagen=$filename;
					//$proveedores_galeria->destroy(1);

			    } else {
			        //return Redirect::back()->with('error', 'I only accept images.');
			    }
			    
			}
		}
				$blog->titulo=Input::get('titulo');						
				$blog->contenido=Input::get('contenido');
				$blog->save();
				unset($blog);	
				return Redirect::to("administracion/blog")->with(array('usuarioimg'=>$authuser->imagen, 'usuarionombre'=>$authuser->nombre));				

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
		$post = Blog::find($id);
		if($post){
			$post->delete();
		}
		return Redirect::to('administracion/blog')->with(array('usuarioimg'=>$authuser->imagen, 'usuarionombre'=>$authuser->nombre));
		//
	}


}
