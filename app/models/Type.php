<?php


class Type extends Eloquent {
	protected $guarded = array();
	public $timestamps  = false;

	public static $rules = array();


	public function house()
	{
		return $this->hasOne('House');
	}

}