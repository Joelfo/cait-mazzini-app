<?php

namespace App\Hateoas;

use App\Models\Patient;
use GDebrauwer\Hateoas\Link;
use GDebrauwer\Hateoas\Traits\CreatesLinks;

class PatientHateoas
{
    use CreatesLinks;

    public function self(Patient $patient) : ?Link
    {
        //
    }
}
