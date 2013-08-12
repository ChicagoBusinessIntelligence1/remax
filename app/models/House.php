<?php


class House extends Eloquent {
    protected $guarded = array();

    public static $rules = array();

    public function users()
    {
    	return $this->belongsToMany('User');
    }

public function images()
{
return $this->hasOne('Image');
}

public function agent()
{
return $this->belongsTo('Agent');
}

}