<?php

class ProveedorTipo extends Eloquent {

	// LINK THIS MODEL TO OUR DATABASE TABLE ---------------------------------
	protected $table = 'proveedor_tipo';
	
	// each Proveedor has many Proveedor Galeria
	public function proveedores() {
		return $this->hasMany('Proveedor', 'proveedor_tipo_idproveedor_tipo'); // this matches the Eloquent model
	}	

}