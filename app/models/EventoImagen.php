<?php

class EventoImagen extends Eloquent {

	// LINK THIS MODEL TO OUR DATABASE TABLE ---------------------------------
	protected $table = 'evento_imagenes';

	// DEFINE RELATIONSHIPS --------------------------------------------------
	// each Evento has one Usuario
	public function evento() {
		return $this->belongsTo('Evento', 'evento_id');
	}
}