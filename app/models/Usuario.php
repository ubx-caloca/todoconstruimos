<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class Usuario extends Eloquent implements UserInterface, RemindableInterface {

	// LINK THIS MODEL TO OUR DATABASE TABLE ---------------------------------
	protected $table = 'usuarios';

	// DEFINE RELATIONSHIPS --------------------------------------------------
	//Each user belongs to multiple roles
	public function usuario_roles() {
		return $this->belongsToMany('UsuarioRol', 'usuario_tiene_rol2',  'usuario_id', 'rol_id')->withTimestamps();
	}

	//Each Usuario can have one Proveedor
	public function proveedor() {
		return $this->hasOne('Proveedor', 'usuario_id');
	}
	
	//Each Usuario can have many Eventos
	public function eventos() {
		return $this->hasMany('Evento', 'usuario');
	}
	
	//Each Usuario can have many Cobros
	public function cobros() {
		return $this->hasMany('Cobro', 'usuario_id'); // this matches the Eloquent model
	}
	
	//Each Usuario can have many Blogs
	public function blogs() {
		return $this->hasMany('Blog', 'usuario'); // this matches the Eloquent model
	}	

	//Each Usuario can have many VideoBlogs
	public function videoBlogs() {
		return $this->hasMany('VideoBlog', 'usuario'); // this matches the Eloquent model
	}	
	
	//Each Usuario can have many Clasificados
	public function clasificados() {
		return $this->hasMany('Clasificado', 'usuario_id'); // this matches the Eloquent model
	}
	
	//Each Usuario can have many Banners
	public function banners() {
		return $this->hasMany('Banner', 'usuario_id'); // this matches the Eloquent model
	}	
	/**
 * Get the unique identifier for the user.
 *
 * @return mixed
 */
public function getAuthIdentifier()
{
    return $this->id;
}

/**
 * Get the password for the user.
 *
 * @return string
 */
public function getAuthPassword()
{
    return $this->password;
}

/**
 * Get the e-mail address where password reminders are sent.
 *
 * @return string
 */
public function getReminderEmail()
{
    return $this->email;
}


public function getRememberToken()
{
    return $this->remember_token;
}

public function setRememberToken($value)
{
    $this->remember_token = $value;
}

public function getRememberTokenName()
{
    return 'remember_token';
}

}