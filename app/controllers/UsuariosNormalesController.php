<?php
use Illuminate\Support\MessageBag;
class UsuariosNormalesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$authuser = Auth::user();
		$rolnormal = UsuarioRol::where('rol', '=', 'usuario normal')->firstOrFail();
		$usuariosnormales = $rolnormal->usuarios()->orderBy('id','asc')->paginate(10);
				
		
		//return  gettype ( $clasificado->fecha_publicacion ). ' '. $clasificado->fecha_publicacion;
		return View::make('administracion.pages.usuariosnormales.index')->with(array('usuarioimg'=>$authuser->imagen, 'usuarionombre'=>$authuser->nombre, 'listaDeUsuarios'=>$usuariosnormales ));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$authuser = Auth::user();
		return View::make('administracion.pages.usuariosnormales.nuevo')->with(array('usuarioimg'=>$authuser->imagen, 'usuarionombre'=>$authuser->nombre));
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$authuser = Auth::user();
		$rules = array(
			'user_email'       => 'required|email',
			'user_password'      => 'min:6|same:user_passwordrep',
			'user_nombre' => 'required',
			'user_imagen' => 'required|mimes:png,gif,jpeg,txt,pdf,doc,rtf|max:20000',	
		);
		$validator = Validator::make(Input::all(), $rules);		
		
		if ($validator->fails()) {
			return Redirect::to('administracion/usuarios/create')
				->withErrors($validator)->withInput();
		} else {
			//check if email is not already in Usuario table
			$usuariorepetido = Usuario::where('email', Input::get('user_email'))->first();
			if(!is_null($usuariorepetido)){
				$errors = new MessageBag(['user_email' => ['User email already in system']]); // if Auth::attempt fails (wrong credentials) create a new message bag instance.
				return Redirect::to('administracion/usuarios/create')->withErrors($errors)->withInput();		
			
			}
			
			// store
			$usuario = new Usuario;
			$usuario->email      = Input::get('user_email');
			if(Input::get('user_password') != ''){
				$usuario->password     = Hash::make(Input::get('user_password'));
			}
			$usuario->nombre      = Input::get('user_nombre');
			$usuario->telefono = Input::get('user_telefono');
			$usuario->celular= Input::get('user_telefono');
			$usuario->nextel = Input::get('user_telefono');
			
			$rolnormal = UsuarioRol::where('rol','usuario normal')->first();
			$usuario->usuario_roles()->attach($rolnormal->id);

			$user_imagen = Input::file('user_imagen');				
			
			if(!File::exists('images/usuarios')) {
				$result = File::makeDirectory('images/usuarios', 0777);
			}

			if(Input::hasFile('user_imagen')){
				$id = Str::random(4);
				$date_now = new DateTime();
				$destinationPath    = 'images/usuarios/';
				$filename           = $date_now->format('YmdHis').$id;
				$mime_type          = $user_imagen->getMimeType();
				$extension          = $user_imagen->getClientOriginalExtension();
				$upload_success     = $user_imagen->move($destinationPath, $filename.'.'.$extension);
					
			
				$usuario->imagen = $filename.'.'.$extension;
			}

			$usuario->save();
			
	
			$resString = 'Usuario creado exitosamente!';
			Session::flash('message', $resString);

			
			return Redirect::to('administracion/usuarios');	
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
		$usuario = Usuario::find($id);
		return View::make('administracion.pages.usuariosnormales.editar')->with(array('usuarioimg'=>$authuser->imagen, 'usuarionombre'=>$authuser->nombre, 'usuario'=>$usuario));
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
		$usuario = Usuario::find($id);
		$rules = array(
			'user_email'       => 'required|email',
			'user_password'      => 'min:6|same:user_passwordrep',
			'user_nombre' => 'required',
			'user_imagen' => 'mimes:png,gif,jpeg,txt,pdf,doc,rtf|max:20000',	
		);
		$validator = Validator::make(Input::all(), $rules);		
		
		if ($validator->fails()) {
			return Redirect::to('administracion/usuarios/'.$id.'/edit')
				->withErrors($validator)->withInput();
		} else {
			
			//check if email is not already in Usuario table
			$usuariorepetido = DB::table('usuarios')->where('email', Input::get('user_email'))->whereNotIn( 'id', [$id])->first();
			if(!is_null($usuariorepetido)){
				$errors = new MessageBag(['user_email' => ['User email already in system']]); // if Auth::attempt fails (wrong credentials) create a new message bag instance.
				return Redirect::to('administracion/usuarios/'.$id.'/edit')->withErrors($errors)->withInput();		
			
			}
			
			// store
			$usuario->email      = Input::get('user_email');
			if(Input::get('user_password') != ''){
				$usuario->password     = Hash::make(Input::get('user_password'));
			}
			$usuario->nombre      = Input::get('user_nombre');
			$usuario->telefono = Input::get('user_telefono');
			$usuario->celular= Input::get('user_telefono');
			$usuario->nextel = Input::get('user_telefono');

			$user_imagen = Input::file('user_imagen');				
			
			if(!File::exists('images/usuarios')) {
				$result = File::makeDirectory('images/usuarios', 0777);
			}

			if(Input::hasFile('user_imagen')){
				//Delete old image from  server
				File::delete('images/usuarios/'.$usuario->imagen);

				$id = Str::random(4);
				$date_now = new DateTime();
				$destinationPath    = 'images/usuarios/';
				$filename           = $date_now->format('YmdHis').$id;
				$mime_type          = $user_imagen->getMimeType();
				$extension          = $user_imagen->getClientOriginalExtension();
				$upload_success     = $user_imagen->move($destinationPath, $filename.'.'.$extension);
					
			
				$usuario->imagen = $filename.'.'.$extension;
			}

			$usuario->save();
			
	
			$resString = 'Usuario editado exitosamente!';
			Session::flash('message', $resString);

			
			return Redirect::to('administracion/usuarios');	
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
		$usuario = Usuario::find($id);
		
		//borrar imagen de usuario
		File::delete('images/usuarios/'.$usuario->imagen);
		
		//borrar imagenes de clasificados
		$clasificados = $usuario->clasificados;
		foreach ($clasificados as $clasificado){
			$clasimgs = $clasificado->imagenes;
			foreach($clasimgs as $clasimg){
				File::delete('images/clasificados/'.$clasimg->nombre_imagen);
			}
		}
		
		//borrar imagenes del proveedor
		$prov = $usuario->proveedor;
		$success = File::deleteDirectory('images/proveedores/'.$prov->nombre_usuario); //Borrar todas las imagenes adentro y el folder
		
		//borrar imagenes de banners
		$banners = $usuario->banners;
		foreach ($banners as $banner){
			File::delete('images/banners/'.$banner->banner_img);
		}	
		
		//borrar imagenes de blog (No deberia pero por si alguna vez un usuario normal puede crear agregar al blog)
		$blogposts = $usuario->blogs;
		foreach ($blogposts as $blog){
			File::delete('images/blog/'.$blog->imagen);
		}			
		
		//borrar imagenes de eventos (No deberia pero por si alguna vez un usuario normal puede crear eventos)
		$eventos = $usuario->eventos;
		foreach ($eventos as $evento){
			$evntimgs = $evento->imagenes;
			foreach($evntimgs as $evntimg){
				File::delete('images/eventos/'.$evento->imagen);
			}
			File::delete('images/eventos/'.$evento->imagen);
		}			
		
		//TODO: Faltaria eliminar pagos pendientes donde haya un clasificado, ser_proveedor o banner de este usuario
		
		$usuario->delete();
		
		$resString = 'Usuario borrado exitosamente!';
		Session::flash('message', $resString);

			
		return Redirect::to('administracion/usuarios');	
	}


}
