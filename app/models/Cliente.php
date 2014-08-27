<?php

class Cliente extends Eloquent {
	

	protected $table = 'cliente';
	public $timestamps = false;

	public function documento() {
		return $this->belongsTo('Documento','id_tipo_documento'); 
	}

}	