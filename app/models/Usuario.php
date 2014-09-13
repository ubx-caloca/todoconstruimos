<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class Usuario extends Eloquent implements UserInterface, RemindableInterface {

	// LINK THIS MODEL TO OUR DATABASE TABLE ---------------------------------
	protected $table = 'usuarios';

	// DEFINE RELATIONSHIPS --------------------------------------------------
	public function usuario_roles() {
		return $this->belongsToMany('UsuarioRol', 'usuario_tiene_rol2',  'usuario_id', 'rol_id')->withTimestamps();
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