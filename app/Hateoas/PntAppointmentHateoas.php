<?php

namespace App\Hateoas;

use App\Models\PntAppointment;
use GDebrauwer\Hateoas\Link;
use GDebrauwer\Hateoas\Traits\CreatesLinks;

class PntAppointmentHateoas
{
    use CreatesLinks;

    public function self(PntAppointment $pntAppointment) : ?Link
    {
        return $this->link('pntAppointments.show', ['pntAppointment' => $pntAppointment]);
    }

    
    public function patient(PntAppointment $pntAppointment) : ?Link
    {
        return $this->link('patients.show', ['patient' => $pntAppointment->patient]);
    }
}
