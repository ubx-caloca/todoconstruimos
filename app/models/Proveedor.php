<?php

class Proveedor extends Eloquent{

	protected $table = 'proveedores';

	// DEFINE RELATIONSHIPS --------------------------------------------------
	// each Proveedor belongs one ProveedorTipo
	public function tipo() {
		return $this->belongsTo('ProveedorTipo', 'proveedor_tipo_idproveedor_tipo'); // this matches the Eloquent model
	}	
	
	// each Proveedor belongs one Usuario
	public function usuario() {
		return $this->belongsTo('Usuario', 'usuario_id'); // this matches the Eloquent model
	}	
	
	// each Proveedor has one Proveedor Detalle
	public function detalle() {
		return $this->hasOne('ProveedorDetalle', 'proveedores_idproveedor'); // this matches the Eloquent model
	}

	// each Proveedor has many Proveedor Galeria
	public function galeria() {
		return $this->hasMany('ProveedorGaleria', 'proveedores_idproveedor'); // this matches the Eloquent model
	}	
}

?>