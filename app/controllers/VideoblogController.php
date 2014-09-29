<?php
use Illuminate\Support\MessageBag;
class VideoblogController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$authuser = Auth::user();
		$videoblog = VideoBlog::paginate(15);
		return View::make('administracion.pages.videoblog.index')->with(array('videoblog'=>$videoblog, 'usuarioimg'=>$authuser->imagen, 'usuarionombre'=>$authuser->nombre, 'usuarioid'=>$authuser->id));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		$authuser = Auth::user();
		return View::make('administracion.pages.videoblog.nuevo')->with(array('usuarioimg'=>$authuser->imagen, 'usuarionombre'=>$authuser->nombre, 'usuarioid'=>$authuser->id));
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
		$authuser = Auth::user();
		
		$rules = array(
			'titulo'       => 'required',
			'video'      => 'required',
			'contenido' => 'required',
		);
		$validator = Validator::make(Input::all(), $rules);		
		
		if ($validator->fails()) {
			return Redirect::to('administracion/videoblog/create')->with(array('usuarioimg'=>$authuser->imagen, 'usuarionombre'=>$authuser->nombre, 'usuarioid'=>$authuser->id))->withErrors($validator)->withInput();
		} else {
			// store
			
			function get_http_response_code($theURL) {
				$headers = get_headers($theURL);
				return substr($headers[0], 9, 3);
			}

			$string = "http://www.youtube.com/oembed?url=http://www.youtube.com/watch?v=". Input::get('video')."&format=json";

			$code = get_http_response_code ($string);

			if ($code != "200") {
				$errors = new MessageBag(['video' => ['Youtube ID does not correspond to a video']]); 
					return Redirect::to('administracion/videoblog/create')->with(array('usuarioimg'=>$authuser->imagen, 'usuarionombre'=>$authuser->nombre, 'usuarioid'=>$authuser->id))->withErrors($errors)->withInput();
			} 
						
			$videoblog = new VideoBlog;
			$videoblog ->titulo       = Input::get('titulo');
			$videoblog->video      = Input::get('video');
			$videoblog->contenido = Input::get('contenido');
			$videoblog->fecha = new DateTime();
			$usuario_id = Session::get('usuario_id', function() { return 1; });
			$videoblog->usuario = $usuario_id;
			$videoblog->save();
			
			$resString = 'Post de video blog creado exitosamente!';
			Session::flash('message', $resString);
			return Redirect::to('administracion/videoblog')->with(array('usuarioimg'=>$authuser->imagen, 'usuarionombre'=>$authuser->nombre, 'usuarioid'=>$authuser->id));	
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
		$videoblog = VideoBlog::find($id);

		return View::make('administracion.pages.videoblog.editar')->with(array('videoblog'=>$videoblog,'usuarioimg'=>$authuser->imagen, 'usuarionombre'=>$authuser->nombre, 'usuarioid'=>$authuser->id));
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
		$rules = array(
			'titulo'       => 'required',
			'video'      => 'required',
			'contenido' => 'required'
		);
		$validator = Validator::make(Input::all(), $rules);		
		if ($validator->fails()) {
			return Redirect::to('administracion/videoblog/'.$id.'/edit')->with(array('usuarioimg'=>$authuser->imagen, 'usuarionombre'=>$authuser->nombre, 'usuarioid'=>$authuser->id))->withErrors($validator)->withInput();
		} else {
			// store
			function get_http_response_code($theURL) {
				$headers = get_headers($theURL);
				return substr($headers[0], 9, 3);
			}

			$string = "http://www.youtube.com/oembed?url=http://www.youtube.com/watch?v=". Input::get('video')."&format=json";

			$code = get_http_response_code ($string);

			if ($code != "200") {
				$errors = new MessageBag(['video' => ['Youtube ID does not correspond to a video']]); 
					return Redirect::to('administracion/videoblog/'.$id.'/edit')->with(array('usuarioimg'=>$authuser->imagen, 'usuarionombre'=>$authuser->nombre, 'usuarioid'=>$authuser->id))->withErrors($errors)->withInput();
			} 

			
			$videoblog =  VideoBlog::find($id);
			$videoblog ->titulo       = Input::get('titulo');
			$videoblog->video      = Input::get('video');
			$videoblog->contenido = Input::get('contenido');
			$videoblog->save();
			
			$resString = 'Post de video blog editado exitosamente!';
			Session::flash('message', $resString);
			return Redirect::to('administracion/videoblog')->with(array('usuarioimg'=>$authuser->imagen, 'usuarionombre'=>$authuser->nombre, 'usuarioid'=>$authuser->id));	
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
		$clasificado = VideoBlog::find($id);
		$clasificado->delete();

		// redirect
		Session::flash('message', 'El post del video blog ha sido eliminado exitosamente!');
		return Redirect::to('administracion/videoblog')->with(array('usuarioimg'=>$authuser->imagen, 'usuarionombre'=>$authuser->nombre, 'usuarioid'=>$authuser->id));
	}


}
