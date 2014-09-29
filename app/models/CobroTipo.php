<?php

class CobroTipo extends Eloquent {

	// LINK THIS MODEL TO OUR DATABASE TABLE ---------------------------------
	protected $table = 'cobro_tipo';
	
	public function cobros() {
		return $this->hasMany('Cobro', 'tipo_id'); // this matches the Eloquent model
	}

}