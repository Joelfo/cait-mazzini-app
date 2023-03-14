<?php

namespace App\Hateoas;

use App\Models\City;
use App\Models\District;
use GDebrauwer\Hateoas\Link;
use GDebrauwer\Hateoas\Traits\CreatesLinks;

class CityHateoas
{
    use CreatesLinks;

    public function self(City $city) : ?Link
    {
        return $this->link('cities.show', ['city' => $city]);
    }

   /* public function district(City $city) : ?Link
    {
        return $this->link('cities.districts', ['cityId' => $city->id]);        
    } */
}
