<?php

class Clasificado extends Eloquent {

	// LINK THIS MODEL TO OUR DATABASE TABLE ---------------------------------
	protected $table = 'clasificados';

	// DEFINE RELATIONSHIPS --------------------------------------------------
	// each Clasificado has one Usuario
	public function usuario() {
		return $this->belongsTo('Usuario', 'usuario_id'); // this matches the Eloquent model
	}
	
	public function imagenes(){
		return $this->hasMany('ClasificadoImagen', 'clasificado_id');
	}
	
	// DEFINE RELATIONSHIPS --------------------------------------------------
	// each Clasificado has one categoria
	public function categoria() {
		return $this->belongsTo('ClasificadoCategoria', 'categoria_id'); // this matches the Eloquent model
	}
}