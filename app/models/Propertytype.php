<?php


class Propertytype extends Eloquent {
	 protected $guarded = array();
	 public $timestamps  = false;

    public static $rules = array();

 public function rental()
{
return $this->belongsTo('Rental');
}

 public function house()
{
return $this->hasOne('House');
}

}