<?php

class BienesraicesImagen extends Eloquent {

	// LINK THIS MODEL TO OUR DATABASE TABLE ---------------------------------
	protected $table = 'bienesraices_imagenes';

	// DEFINE RELATIONSHIPS --------------------------------------------------
	public function bienesraices() {
		return $this->belongsTo('Bienesraices', 'bienesraices_id');
	}
	
}