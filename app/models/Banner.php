<?php

class Banner extends Eloquent{

	protected $table = 'banners';
	
	// each Banner has one Usuario
	public function usuario() {
		return $this->belongsTo('Usuario', 'usuario_id'); // this matches the Eloquent model
	}
}

?>