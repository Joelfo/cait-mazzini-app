<?php
namespace App\Repositories\Eloquent;

use App\Models\PntAppointment;
use App\Repositories\PntAppointmentRepository;

class EloquentPntAppointmentRepository extends EloquentBaseRepository implements PntAppointmentRepository {
    public function __construct()
    {
        parent::__construct(PntAppointment::class);
    }
}
