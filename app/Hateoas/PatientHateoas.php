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
        return $this->link('patients.show', ['patient' => $patient]);
    }

    public function district(Patient $patient) : ?Link
    {
        return $this->link('districts.show', ['district' => $patient->district]);
    }

    public function healthUnity(Patient $patient) : ?Link
    {
        return $this->link('healthUnities.show', ['healthUnity' => $patient->district]);
    }
}
