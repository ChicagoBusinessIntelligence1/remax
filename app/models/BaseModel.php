<?php


class Basemodel extends Eloquent {
	protected $guarded = array();

	
	public static function validate($data) {
	$validator = Validator::make($data, static::$rules); 
	return $validator;

	}



}