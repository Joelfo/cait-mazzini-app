<?php

namespace App\Hateoas;

use App\Models\PhysicalExam;
use GDebrauwer\Hateoas\Link;
use GDebrauwer\Hateoas\Traits\CreatesLinks;

class PhysicalExamHateoas
{
    use CreatesLinks;

    public function self(PhysicalExam $physicalExam) : ?Link
    {
        return $this->link('physicalExams.show', ['physicalExam' => $physicalExam]);
    }

    public function patient(PhysicalExam $physicalExam) : ?Link
    {
        return $this->link('patients.show', ['patient' => $physicalExam->patient]);
    }

}
