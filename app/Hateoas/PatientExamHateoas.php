<?php

namespace App\Hateoas;

use App\Models\PatientExam;
use GDebrauwer\Hateoas\Link;
use GDebrauwer\Hateoas\Traits\CreatesLinks;

class PatientExamHateoas
{
    use CreatesLinks;

    public function self(PatientExam $patientExam) : ?Link
    {
        return $this->link('patientExams.show', ['patientExam' => $patientExam]);
    }

    public function patient(PatientExam $patientExam) : ?Link
    {
        return $this->link('patients.show', ['patient' => $patientExam->patient]);
    }
}
