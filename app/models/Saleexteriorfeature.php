<?php


class Saleexteriorfeature extends Eloquent {
    protected $guarded = array();

    public static $rules = array();

public function house()
{
return $this->hasOne('House');
}




}