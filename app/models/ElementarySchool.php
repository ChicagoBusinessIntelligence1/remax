<?php


class Elementaryschool extends Eloquent {
    protected $guarded = array();

    public static $rules = array();


public function listings()
{
return $this->HasMany('Listing');
}



}