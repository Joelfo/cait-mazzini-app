<?php

namespace App\Hateoas;

use App\Models\VitalSignsMeasurement;
use GDebrauwer\Hateoas\Link;
use GDebrauwer\Hateoas\Traits\CreatesLinks;

class VitalSignsMeasurementHateoas
{
    use CreatesLinks;

    public function self(VitalSignsMeasurement $vitalSignsMeasurement) : ?Link
    {
        return $this->link('vitalSignsMeasurements.show', ['vitalSignsMeasurement' => $vitalSignsMeasurement]);
    }

    public function patient(VitalSignsMeasurement $vitalSignsMeasurement) : ?Link
    {
        return $this->link('patients.show', ['patient' => $vitalSignsMeasurement->patient]);
    }
}
