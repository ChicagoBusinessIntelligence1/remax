<?php


class City extends Eloquent {
    protected $guarded = array();

    public static $rules = array();

public $timestamps  = false;

public function house()
{
return $this->hasOne('House');
}




}