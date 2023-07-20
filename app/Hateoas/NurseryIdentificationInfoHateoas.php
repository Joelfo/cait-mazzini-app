<?php

namespace App\Hateoas;

use GDebrauwer\Hateoas\Link;
use GDebrauwer\Hateoas\Traits\CreatesLinks;

class NurseryIdentificationInfoHateoas
{
    use CreatesLinks;

    public function self($nurseryIdentificationInfo) : ?Link
    {
        return $this->link('nurseryIdentificationInfos.show', ['nurseryIdentificationInfo' => $nurseryIdentificationInfo]);
    }

    public function patient($nurseryIdentificationInfo) : ?Link
    {
        return $this->link('patients.show', ['patient' => $nurseryIdentificationInfo->patient]);
    }
}
