<?php

class ClasificadoCategoria extends Eloquent {

	// LINK THIS MODEL TO OUR DATABASE TABLE ---------------------------------
	protected $table = 'clasificado_categorias';
	
	public function clasificados(){
		return $this->hasMany('Clasificado', 'categoria_id');
	}
}