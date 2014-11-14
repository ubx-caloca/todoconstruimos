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
		$Posts = Blog::orderBy('id','desc')->paginate(2);
		return View::make('administracion.pages.blog.index')->with(array('Posts'=>$Posts, 'usuarioimg'=>$authuser->imagen, 'usuarionombre'=>$authuser->nombre, 'usuarioid'=>$authuser->id));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$authuser = Auth::user();
		return View::make('administracion.pages.blog.crear')->with(array('usuarioimg'=>$authuser->imagen, 'usuarionombre'=>$authuser->nombre, 'usuarioid'=>$authuser->id));
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
		$rules = array(
			'titulo'      => 'required',
			'contenido'   => 'required',
			'imagen' => 'required|mimes:png,gif,jpeg|max:200000000'
		);
		$validator = Validator::make(Input::all(), $rules);		
		
		if ($validator->fails()) {
			return Redirect::to('administracion/blog/create')
				->withErrors($validator)->withInput();
		} else {
			$file = Input::file('imagen');
			$blog = new Blog;
			$id = Str::random(4);
			$date_now = new DateTime();

		    $destinationPath    = 'images/blog/';
		    $filename           = $date_now->format('YmdHis').$id;
		    $mime_type          = $file->getMimeType();
		    $extension          = $file->getClientOriginalExtension();
		    $upload_success     = $file->move($destinationPath, $filename.'.'.$extension);

			$blog->fecha=$date_now;
			$blog->usuario=$authuser->id;
			$blog->titulo=Input::get('titulo');		
			$blog->imagen=$filename.'.'.$extension;
			$blog->contenido=Input::get('contenido');
			$blog->save();			
		}		
		
		return Redirect::to("administracion/blog")->with(array('usuarioimg'=>$authuser->imagen, 'usuarionombre'=>$authuser->nombre, 'usuarioid'=>$authuser->id));
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
		return View::make('administracion.pages.blog.editar')->with(array('post'=>$post, 'usuarioimg'=>$authuser->imagen, 'usuarionombre'=>$authuser->nombre, 'usuarioid'=>$authuser->id));		
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
		if(!File::exists('images/blog/')) {
		    $result = File::makeDirectory('images/blog/', 0777);
		}
		$rules = array(
			'titulo'      => 'required',
			'contenido'   => 'required',
			'imagen' => 'mimes:png,gif,jpeg|max:200000000'
		);
		$validator = Validator::make(Input::all(), $rules);		
		
		if ($validator->fails()) {
			return Redirect::to('administracion/blog/editar/'.$id)
				->withErrors($validator)->withInput();
		} else {
			$blog = Blog::find($id);		
			if(Input::hasFile('imagen')){
				File::delete('images/banners/'.$blog->imagen); //Delete old image
				
				//save new image
				$file = Input::file('imagen');
				$id = Str::random(4);
				$date_now = new DateTime();

				$destinationPath    = 'images/blog/';
				$filename           = $date_now->format('YmdHis').$id;
				$mime_type          = $file->getMimeType();
				$extension          = $file->getClientOriginalExtension();
				$upload_success     = $file->move($destinationPath, $filename.'.'.$extension);

				$blog->imagen=$filename.'.'.$extension;
			}
			$blog->titulo=Input::get('titulo');		
			$blog->contenido=Input::get('contenido');
			$blog->save();		

		}		
	
		return Redirect::to("administracion/blog")->with(array('usuarioimg'=>$authuser->imagen, 'usuarionombre'=>$authuser->nombre, 'usuarioid'=>$authuser->id));				

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
			File::delete('images/blog/'.$post->imagen);
			$post->delete();
		}
		return Redirect::to('administracion/blog')->with(array('usuarioimg'=>$authuser->imagen, 'usuarionombre'=>$authuser->nombre, 'usuarioid'=>$authuser->id));
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function mostrarPost($id)
	{
		$bannersizquierda = Banner::where('seccion', '=', 'BLOG-IZQUIERDA')->where('habilitar','=', '1')->orderBy('id','asc')->get();
		$bannersderecha =  Banner::where('seccion', '=', 'BLOG-DERECHA')->where('habilitar','=', '1')->orderBy('id','asc')->get();
		$bannersindexarriba = Banner::where('seccion', '=', 'INDEX-ARRIBA')->where('habilitar', '=', 1)->orderBy('id','asc')->get();
		$anuncios = Anuncio::all();
		
		$rolusuarioLogueado = '';
		$mailusuarioLogueado = '';
		$nombreusuarioLogueado = '';
		if (Auth::check()){
			$authuser = Auth::user();
			$usu = Usuario::find($authuser->id);
			$mailusuarioLogueado = $authuser->email;
			$nombreusuarioLogueado = $authuser->nombre;
			$rolusuarioLogueado= DB::table('usuario_tiene_rol2')->where('usuario_id', '=', $authuser->id)->first();
			$rolusuarioLogueado = UsuarioRol::find($rolusuarioLogueado->rol_id)->rol;
			
		}

		$post = Blog::find($id);
		return View::make('index.blogPost')->with(array('bannersizquierda'=>$bannersizquierda,'bannersderecha'=>$bannersderecha,'post'=>$post, 'anuncios' => $anuncios, 'username'=> $mailusuarioLogueado, 'nameuser'=> $nombreusuarioLogueado, 'roluser'=> $rolusuarioLogueado, 'bannersindexarriba'=>$bannersindexarriba));
		//
	}
	public function mostrarBlog()
	{
		//$Posts = DB::table('blog')->orderBy('id','desc')->paginate(2);
		//$bannersizquierda = DB::table('banners')->where('seccion', '=', 'BLOG-IZQUIERDA','AND')->where('habilitar', '=', '1')->orderBy('id','asc')->get();

		$bannersizquierda = Banner::where('seccion', '=', 'BLOG-IZQUIERDA')->where('habilitar','=', '1')->orderBy('id','asc')->get();
		$bannersderecha =  Banner::where('seccion', '=', 'BLOG-DERECHA')->where('habilitar','=', '1')->orderBy('id','asc')->get();
		$bannersindexarriba = Banner::where('seccion', '=', 'INDEX-ARRIBA')->where('habilitar', '=', 1)->orderBy('id','asc')->get();
		
		$blog = Blog::orderBy('fecha','desc')->paginate(5);
		$anuncios = Anuncio::all();
		
		$rolusuarioLogueado = '';
		$mailusuarioLogueado = '';
		$nombreusuarioLogueado = '';
		if (Auth::check()){
			$authuser = Auth::user();
			$usu = Usuario::find($authuser->id);
			$mailusuarioLogueado = $authuser->email;
			$nombreusuarioLogueado = $authuser->nombre;
			$rolusuarioLogueado= DB::table('usuario_tiene_rol2')->where('usuario_id', '=', $authuser->id)->first();
			$rolusuarioLogueado = UsuarioRol::find($rolusuarioLogueado->rol_id)->rol;
			
		}
		return View::make('index.blog')->with(array('bannersizquierda'=>$bannersizquierda,'bannersderecha'=>$bannersderecha,'blog'=>$blog, 'anuncios' => $anuncios, 'username'=> $mailusuarioLogueado, 'nameuser'=> $nombreusuarioLogueado, 'roluser'=> $rolusuarioLogueado, 'bannersindexarriba'=>$bannersindexarriba));
		//
	}	



}
