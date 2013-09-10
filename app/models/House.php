<?php


class House extends Eloquent {
    protected $guarded = array();

    public static $rules = array();


public function status()
{
return $this->belongsTo('Status');
}

public function street()
{
return $this->belongsTo('Street');
}

public function state()
{
return $this->belongsTo('State');
}

public function city()
{
return $this->belongsTo('City');
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