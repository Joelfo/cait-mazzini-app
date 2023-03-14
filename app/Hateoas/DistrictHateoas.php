<?php

namespace App\Hateoas;

use App\Models\District;
use GDebrauwer\Hateoas\Link;
use GDebrauwer\Hateoas\Traits\CreatesLinks;

class DistrictHateoas
{
    use CreatesLinks;

    public function self(District $district) : ?Link
    {
        return $this->link('districts.show', ['district' => $district]);
    }

    public function city(District $district) : ?Link 
    {
        return $this->link('cities.show', ['city' => $district->city]);
    }
}
