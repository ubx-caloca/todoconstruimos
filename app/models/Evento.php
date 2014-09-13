<?php

class Evento extends Eloquent {

	// LINK THIS MODEL TO OUR DATABASE TABLE ---------------------------------
	protected $table = 'eventos';

	// DEFINE RELATIONSHIPS --------------------------------------------------
	// each Evento has one Usuario
	public function usuario() {
		return $this->hasOne('Usuario', 'usuario_id'); // this matches the Eloquent model
	}
	
	public function imagenes(){
		return $this->HasMany('EventoImagen', 'evento_id');
	}
}