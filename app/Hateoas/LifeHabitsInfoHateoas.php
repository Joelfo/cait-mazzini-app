<?php

namespace App\Hateoas;

use GDebrauwer\Hateoas\Link;
use GDebrauwer\Hateoas\Traits\CreatesLinks;

class LifeHabitsInfoHateoas
{
    use CreatesLinks;


    public function self($lifeHabitsInfo) : ?Link
    {
        return $this->link('lifeHabitsInfos.show', ['lifeHabitsInfo' => $lifeHabitsInfo]);
    }

    public function patient($lifeHabitsInfo) : ?Link
    {
        return $this->link('patients.show', ['patient' => $lifeHabitsInfo->patient]);
    }
}
