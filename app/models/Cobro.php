<?php

class Cobro extends Eloquent {

	// LINK THIS MODEL TO OUR DATABASE TABLE ---------------------------------
	protected $table = 'cobros';
	
	// each Cobro belongs one CobroTipo
	public function tipo() {
		return $this->belongsTo('CobroTipo', 'tipo_id'); // this matches the Eloquent model
	}	
	// each Cobro belongs one Usuario
	public function usuario() {
		return $this->belongsTo('Usuario', 'usuario_id'); // this matches the Eloquent model
	}
	// each Cobro can have multiple CobroHistorial
	public function cobrosHistorial() {
		return $this->hasMany('CobroHistorial', 'cobro_id'); // this matches the Eloquent model
	}
}