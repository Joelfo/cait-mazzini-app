<?php

namespace App\Hateoas;

use App\Models\Nationality;
use GDebrauwer\Hateoas\Link;
use GDebrauwer\Hateoas\Traits\CreatesLinks;

class NationalityHateoas
{
    use CreatesLinks;

    public function self(Nationality $nationality) : ?Link
    {
        return $this->link('nationalities.show', ['nationality' => $nationality]);
    }
}
