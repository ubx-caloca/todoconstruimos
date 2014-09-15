<?php

class SignupController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	
	public function showSignup()
	{
		return View::make('index.signup');
	}

	public function doSignup()
	{
		
		$rules = array(
			'user_email'       => 'required|email',
			'user_password'      => 'required|min:6|same:user_password_confirmation',
			'user_nombre' => 'required',
			'user_telefono' => 'required',
			'user_celular' => 'required',
			'user_nextel' => 'required',
			'user_imagen' => 'required|mimes:png,gif,jpeg,txt,pdf,doc,rtf|max:20000'
			
		);
		$validator = Validator::make(Input::all(), $rules);		
		
		if ($validator->fails()) {
			return Redirect::to('signup/')
				->withErrors($validator)->withInput();
		} else {
			// store
						
			$usuario = new Usuario;
			$usuario->email      = Input::get('user_email');
			$usuario->password     = Hash::make(Input::get('user_password'));
			$usuario->nombre      = Input::get('user_nombre');
			$usuario->telefono = Input::get('user_telefono');
			$usuario->celular= Input::get('user_telefono');
			$usuario->nextel = Input::get('user_telefono');

			$user_imagen = Input::file('user_imagen');				
			
			if(!File::exists('images/usuarios')) {
				$result = File::makeDirectory('images/usuarios', 0777);
			}
			
			$id = Str::random(4);
			$date_now = new DateTime();
			$destinationPath    = 'images/usuarios/';
			$filename           = $date_now->format('YmdHis').$id;
			$mime_type          = $user_imagen->getMimeType();
			$extension          = $user_imagen->getClientOriginalExtension();
			$upload_success     = $user_imagen->move($destinationPath, $filename.'.'.$extension);
					
			
			$usuario->imagen = $filename.'.'.$extension;
			$usuario->save();
			
			$usuario->usuario_roles()->attach(2);
			
	
			$resString = 'Usuario creado exitosamente!';
			Session::flash('message', $resString);
			
			//Log in new user
			Auth::logout();
			Auth::login($usuario, true);
			
			return Redirect::to('/');	
		}		
		
		
	}
	

	public function doSignout()
	{
		Auth::logout();
		return Redirect::to('/');
	}	
	 
	 
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
