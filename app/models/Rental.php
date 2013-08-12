<?php


class Rental extends Eloquent {
    protected $guarded = array();

    public static $rules = array();

public function rentalimage()
{
return $this->hasOne('Rentalimage');
}

public function rentalpropertytype()
{
return $this->belongsTo('Rentalpropertytype');
}

public function agent()
{
return $this->belongsTo('Agent');
}

}