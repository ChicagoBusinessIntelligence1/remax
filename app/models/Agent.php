<?php


class Agent extends Eloquent {
    protected $guarded = array();

    public static $rules = array();

public function houses()
{
return $this->hasMany('House');
}

public function rentals()
{
	
return $this->hasMany('Rental');
}


}