<?php

class CobroHistorial extends Eloquent {

	// LINK THIS MODEL TO OUR DATABASE TABLE ---------------------------------
	protected $table = 'cobros_pendientes';
	
	// each Cobro belongs one CobroHistorial
	public function cobro() {
		return $this->belongsTo('Cobro', 'cobro_id'); // this matches the Eloquent model
	}		

}