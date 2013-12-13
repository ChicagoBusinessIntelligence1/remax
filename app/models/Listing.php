<?php


class Listing extends Eloquent {
    protected $guarded = array();

    public static $rules = array();


public function city()
{
return $this->belongsTo('City');
}

public function elementaryschools()
{
return $this->HasMany('ElementarySchool');
}


}