<?php


class Rentalpropertytype extends Eloquent {
	
    protected $guarded = array();

    public static $rules = array();



public function rental()
{
return $this->hasMany('Rental');
}

}