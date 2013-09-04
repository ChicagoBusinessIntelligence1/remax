<?php


class House extends Eloquent {
    protected $guarded = array();

    public static $rules = array();


public function status()
{
return $this->belongsTo('Status');
}

public function type()
{
return $this->belongsTo('Type');
}

public function saletypes()
{
return $this->belongsToMany('Saletype');
}


}