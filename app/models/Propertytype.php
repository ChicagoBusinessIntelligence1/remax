<?php


class Propertytype extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

	public function rental()
	{
		return $this->belongsTo('Rental');
	}

	public $timestamps  = false;
	public function house()
	{
		return $this->hasOne('House');
	}

}