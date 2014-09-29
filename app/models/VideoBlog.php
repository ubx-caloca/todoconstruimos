<?php

class VideoBlog extends Eloquent{

	protected $table = 'videoBlog';

	// each Proveedor belongs one Usuario
	public function usuario() {
		return $this->belongsTo('Usuario', 'usuario'); // this matches the Eloquent model
	}	

}

?>