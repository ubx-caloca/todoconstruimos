<?php

class UsuarioRol extends Eloquent {

	// LINK THIS MODEL TO OUR DATABASE TABLE ---------------------------------
	protected $table = 'usuario_roles';

	public function usuarios(){
		return $this->belongsToMany('Usuario', 'usuario_tiene_rol2', 'rol_id', 'usuario_id');
	}
}