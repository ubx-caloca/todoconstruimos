<?php

class UsuariosAdminController extends \BaseController {


	public function editarAdmin(){
		$authuser = Auth::user();
		$usuario = Usuario::find($authuser->id);
		$usuario->password = '';
		
		//return  gettype ( $clasificado->fecha_publicacion ). ' '. $clasificado->fecha_publicacion;
		return View::make('administracion.pages.usuarios.editaradmin')->with(array('usuario'=>$usuario, 'usuarioimg'=>$authuser->imagen, 'usuarionombre'=>$authuser->nombre, 'usuarioid'=>$authuser->id));			
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
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
		$usuario = Usuario::find($id);
		$rules = array(
			'user_email'       => 'required|email',
			'user_password'      => 'min:6|same:user_passwordrep',
			'user_nombre' => 'required',
			'user_imagen' => 'mimes:png,gif,jpeg,txt,pdf,doc,rtf|max:20000',
			'user_oldpassword' => 'required_with_all:user_password,user_passwordrep'		
		);
		$validator = Validator::make(Input::all(), $rules);		
		
		if ($validator->fails()) {
			return Redirect::to('administracion/adminusuarioedit')
				->withErrors($validator)->withInput();
		} else {
			
			//check if email is not already in Usuario table
			$usuariorepetido = DB::table('usuarios')->where('email', Input::get('user_email'))->whereNotIn( 'id', [$id])->first();
			if(!is_null($usuariorepetido)){
				$errors = new MessageBag(['user_email' => ['User email already in system']]); // if Auth::attempt fails (wrong credentials) create a new message bag instance.
				return Redirect::to('administracion/adminusuarioedit')->withErrors($errors)->withInput();		
			
			}

			//check if current password is correct
			if(Input::get('user_password') != ''){
			
			$userdata = array(
				'email' 	=> $usuario->email,
				'password' 	=> Input::get('user_oldpassword')
			);
			if (!Auth::validate($userdata)){
 					$errors = new MessageBag(['user_password' => ['Incorrect current user password']]); // if Auth::attempt fails (wrong credentials) create a new message bag instance.
					return Redirect::to('administracion/adminusuarioedit')->withErrors($errors)->withInput();						   
			}
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
			
	
			$resString = 'Usuario creado exitosamente!';
			Session::flash('message', $resString);
			$rolusuario= DB::table('usuario_tiene_rol2')->where('usuario_id', '=', $usuario->id)->first();
			$rol = UsuarioRol::find($rolusuario->rol_id)->rol;
			
			//Log in new user
			Auth::logout();
			Auth::login($usuario, true);
			
			return Redirect::to('administracion/');	
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
		//
	}


}
