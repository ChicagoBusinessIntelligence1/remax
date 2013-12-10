<?php


class City extends Eloquent {
    protected $guarded = array();

    public static $rules = array();

public $timestamps  = false;

public function listing()
{
return $this->hasMany('Listing');

}




}