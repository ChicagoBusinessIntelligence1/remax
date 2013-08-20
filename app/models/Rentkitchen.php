<?php


class Rentkitchen extends Eloquent {
	
    protected $guarded = array();

    public static $rules = array();



public function rental()
{
return $this->hasOne('Rental');
}

}