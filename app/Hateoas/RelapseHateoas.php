<?php

namespace App\Hateoas;

use App\Models\Patient;
use App\Models\Relapse;
use GDebrauwer\Hateoas\Link;
use GDebrauwer\Hateoas\Traits\CreatesLinks;

class RelapseHateoas
{
    use CreatesLinks;

    public function self(Relapse $relapse) : ?Link
    {
        return $this->link('relapses.show', ['relapse' => $relapse]);
    }

    public function patient(Relapse $relapse) : ?Link {
        return $this->link('patients.show', ['patient' => $relapse->patient]);
    }
}
