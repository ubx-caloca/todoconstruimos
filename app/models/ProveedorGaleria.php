<?php

class ProveedorGaleria extends Eloquent{

	protected $table = 'proveedor_galeria';
	
	// each Proveedor belongs one Usuario
	public function proveedor() {
		return $this->belongsTo('Proveedor', 'proveedores_idproveedor'); // this matches the Eloquent model
	}	
}

?>