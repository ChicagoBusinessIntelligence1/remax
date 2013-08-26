<?php


class Salebedroom extends Eloquent {
	
    protected $guarded = array();

    public static $rules = array();



public function rental()
{
return $this->hasOne('Rental');
}

////////////////////////////////
public $timestamps  = false;
 
public function house()
{
return $this->hasOne('House');
}
///////////////
}