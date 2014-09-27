<?php

class Blog extends Eloquent{

	protected $table = 'blog';

	// each Proveedor belongs one Usuario
	public function usuario() {
		return $this->belongsTo('Usuario', 'usuario'); // this matches the Eloquent model
	}	

}

?>