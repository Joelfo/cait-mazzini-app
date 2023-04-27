<?php

namespace App\Hateoas;

use App\Models\TbAppointment;
use GDebrauwer\Hateoas\Link;
use GDebrauwer\Hateoas\Traits\CreatesLinks;

class TbAppointmentHateoas
{
    use CreatesLinks;

    public function self(TbAppointment $tbAppointment) : ?Link
    {
        return $this->link('tbAppointments.show', ['tbAppointment' => $tbAppointment]);
    }

    
    public function patient(TbAppointment $tbAppointment) : ?Link
    {
        return $this->link('patients.show', ['patient' => $tbAppointment->patient]);
    }
}
