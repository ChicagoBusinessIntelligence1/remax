<?php


class Status extends Eloquent {
    protected $guarded = array();

    public static $rules = array();

public function house()
{
return $this->belongsTo('House');
}




}