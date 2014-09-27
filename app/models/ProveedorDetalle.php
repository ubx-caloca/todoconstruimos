<?php

class ProveedorDetalle extends Eloquent{

	protected $table = 'proveedor_detalle';

	// each Proveedor belongs one Usuario
	public function proveedor() {
		return $this->belongsTo('Proveedor', 'proveedores_idproveedor'); // this matches the Eloquent model
	}	
		
}

?>