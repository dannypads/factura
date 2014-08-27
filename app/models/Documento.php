<?php

class Documento extends Eloquent {
	

	protected $table = 'tipo_documento';
	public $timestamps = false;

	public function cliente() {
		return $this->hasOne('Cliente'); 
	}

}	