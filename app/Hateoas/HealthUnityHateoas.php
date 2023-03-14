<?php

namespace App\Hateoas;

use App\Models\HealthUnity;
use GDebrauwer\Hateoas\Link;
use GDebrauwer\Hateoas\Traits\CreatesLinks;

class HealthUnityHateoas
{
    use CreatesLinks;

    public function self(HealthUnity $healthUnity) : ?Link
    {
        return $this->link('healthUnities.show', ['healthUnity' => $healthUnity]);
    }

    public function patients(HealthUnity $healthUnity) : ?Link {
        return $this->link('healthUnities.patients', ['healthUnity' => $healthUnity]);
    }
}
