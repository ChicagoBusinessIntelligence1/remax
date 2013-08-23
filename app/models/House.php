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

public function status()
{
return $this->belongsTo('Status');
}

public function saleexteriorfeature()
{
return $this->belongsTo('Saleexteriorfeature');
}

public function propertytype()
{
return $this->belongsTo('Propertytype');
}

public function salebedroom()
{
return $this->belongsTo('Salebedroom');
}

public function salebathroom()
{
return $this->belongsTo('Salebathroom');
}

public function salekitchen()
{
return $this->belongsTo('Salekitchen');
}

public function salediningroom()
{
return $this->belongsTo('Salediningroom');
}

public function salelivingroom()
{
return $this->belongsTo('Salelivingroom');
}

public function saleschool()
{
return $this->belongsTo('Saleschool');
}

public function salepropertyinfo()
{
return $this->belongsTo('Salepropertyinfo');
}

public function salepublicrecord()
{
return $this->belongsTo('Salepublicrecord');
}

public function salefamroom()
{
return $this->belongsTo('Salefamroom');
}

public function salelaundryroom()
{
return $this->belongsTo('Salelaundryroom');
}

public function saleexerciseroom()
{
return $this->belongsTo('Saleexerciseroom');
}

public function salebasement()
{
return $this->belongsTo('Salebasement');
}

public function saleutilityroom()
{
return $this->belongsTo('Saleutilityroom');
}

public function salewalkincloset()
{
return $this->belongsTo('Salewalkincloset');
}

public function saleotherroom()
{
return $this->belongsTo('Saleotherroom');
}

public function saleinteriorfeature()
{
return $this->belongsTo('Saleinteriorfeature');
}

public function saleappliance()
{
return $this->belongsTo('Saleappliance');
}

public function salegarageandparking()
{
return $this->belongsTo('Salegarageandparking');
}

public function salebuildingconstruction()
{
return $this->belongsTo('Salebuildingconstruction');
}

public function saleutility()
{
return $this->belongsTo('Saleutility');
}

public function salehomefeature()
{
return $this->belongsTo('Salehomefeature');
}

public function saleamenity()
{
return $this->belongsTo('Saleamenity');
}



}