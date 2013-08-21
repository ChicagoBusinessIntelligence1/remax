<?php


class Rental extends Eloquent {
    protected $guarded = array();

    public static $rules = array();

public function rentalimage()
{
return $this->hasOne('Rentalimage');
}

public function rentpropertytype()
{
return $this->belongsTo('Rentpropertytype');
}

public function agent()
{
return $this->belongsTo('Agent');
}

public function rentalinfo()
{
return $this->belongsTo('Rentalinfo');
}

public function rentbedroom()
{
return $this->belongsTo('Rentbedroom');
}

public function rentbathroom()
{
return $this->belongsTo('Rentbathroom');
}

public function rentkitchen()
{
return $this->belongsTo('Rentkitchen');
}

public function rentdiningroom()
{
return $this->belongsTo('Rentdiningroom');
}

public function rentlivingroom ()
{
return $this->belongsTo('Rentlivingroom');
}

public function rentfamroom()
{
return $this->belongsTo('Rentfamroom');
}

public function rentlaundryroom()
{
return $this->belongsTo('Rentlaundryroom');
}

public function rentexerciseroom()
{
return $this->belongsTo('Rentexerciseroom');
}

public function rentbasement()
{
return $this->belongsTo('Rentbasement');
}

public function rentutilityroom()
{
return $this->belongsTo('Rentutilityroom');
}

public function rentwalkincloset()
{
return $this->belongsTo('Rentwalkincloset');
}

public function rentotherroom()
{
return $this->belongsTo('Rentotherroom');
}

public function rentinteriorfeature()
{
return $this->belongsTo('Rentinteriorfeature');
}

public function rentappliance()
{
return $this->belongsTo('Rentappliance');
}

/* =exterion details start here*/


public function rentlotfeature()
{
return $this->belongsTo('Rentlotfeature');
}

public function rentgarageandparking()
{
return $this->belongsTo('Rentgarageandparking');
}

public function rentbuildingconstruction()
{
return $this->belongsTo('Rentbuildingconstruction');
}

public function rentutility()
{
return $this->belongsTo('Rentutility');
}

public function rentschool()
{
return $this->belongsTo('Rentschool');
}

public function rentpropertyinfo()
{
return $this->belongsTo('Rentpropertyinfo');
}

public function rentcurrentstatus()
{
return $this->belongsTo('Rentcurrentstatus');
}

}