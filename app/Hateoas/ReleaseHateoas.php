<?php

namespace App\Hateoas;

use App\Models\Release;
use GDebrauwer\Hateoas\Link;
use GDebrauwer\Hateoas\Traits\CreatesLinks;

class ReleaseHateoas
{
    use CreatesLinks;

    public function self(Release $release) : ?Link
    {
        return $this->link('releases.show', ['release' => $release]);
    }

    public function patient(Release $release) : ?Link {
        return $this->link('patients.show', ['patient' => $release->patient]);
    }
}
