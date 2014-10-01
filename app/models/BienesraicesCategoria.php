<?php

class BienesraicesCategoria extends Eloquent {

	// LINK THIS MODEL TO OUR DATABASE TABLE ---------------------------------
	protected $table = 'bienesraices_categorias';
	
	//A Bienesraices categorias has many Bienesraices
	public function bienesraices(){
		return $this->hasMany('Bienesraices', 'categoria_id');
	}
}