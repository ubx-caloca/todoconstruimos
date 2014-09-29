<?php

class ClasificadoImagen extends Eloquent {

	// LINK THIS MODEL TO OUR DATABASE TABLE ---------------------------------
	protected $table = 'clasificado_imagenes';

	// DEFINE RELATIONSHIPS --------------------------------------------------
	public function clasificado() {
		return $this->belongsTo('Clasificado', 'clasificado_id');
	}
	
}