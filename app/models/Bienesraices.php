<?php

class Bienesraices extends Eloquent {

	// LINK THIS MODEL TO OUR DATABASE TABLE ---------------------------------
	protected $table = 'bienesraices';

	// DEFINE RELATIONSHIPS --------------------------------------------------
	// each Bienesraiz has one Usuario
	public function usuario() {
		return $this->belongsTo('Usuario', 'usuario_id'); // this matches the Eloquent model
	}
	
	//A Bienesraiz  has many imagenes
	public function imagenes(){
		return $this->hasMany('BienesraicesImagen', 'bienesraices_id');
	}
	
	// DEFINE RELATIONSHIPS --------------------------------------------------
	// each Bienesraiz belongs to one categoria
	public function categoria() {
		return $this->belongsTo('BienesraicesCategoria', 'categoria_id'); // this matches the Eloquent model
	}
}