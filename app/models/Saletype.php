<?php


class Saletype extends Eloquent {
	protected $guarded = array();

	public static $rules = array();
	public $timestamps  = false;


	public function house()
	{
		return $this->belongsToMany('House');
	}

}