<?php

namespace App\Hateoas;

use App\Http\Controllers\API\TbAppointment;
use App\Models\TrackingAppointmentChart;
use GDebrauwer\Hateoas\Link;
use GDebrauwer\Hateoas\Traits\CreatesLinks;

class TrackingAppointmentChartHateoas
{
    use CreatesLinks;

    public function self(TrackingAppointmentChart $trackingAppointmentChart) : ?Link
    {
        return $this->link('trackingAppointmentCharts.show', ['trackingAppointmentChart' => $trackingAppointmentChart]);
    }

    public function vitalSignsMeasurement(TrackingAppointmentChart $trackingAppointmentChart) : ?Link
    {
        return $this->link('vitalSignsMeasurements.show', ['vitalSignMeasurement' => $trackingAppointmentChart->vitalSignMeasurement]);
    }

    public function patientExams(TrackingAppointmentChart $trackingAppointmentChart) : ?Link 
    {
        return $this->link('trackingAppointmentCharts.patientExams', ['chartId' => $trackingAppointmentChart->id]);
    }

    public function patient(TrackingAppointmentChart $trackingAppointmentChart) : ?Link 
    {
        return $this->link('patients.show', ['patient' => $trackingAppointmentChart->patient]);
    }

    public function appointment(TrackingAppointmentChart $trackingAppointmentChart) : ?Link
    {
        if (is_a($trackingAppointmentChart->appointment, TbAppointment::class)){
            return $this->link('tbAppointments.show', ['tbAppointment' => $trackingAppointmentChart->appointment]);
        }
        else {
            return $this->link('pntAppointments.show', ['pntAppointment' => $trackingAppointmentChart->appointment]);
        }
    }
}
