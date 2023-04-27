<?php
namespace App\Repositories\Eloquent;

use App\Models\TbAppointment;
use App\Repositories\TbAppointmentRepository;

class EloquentTbAppointmentRepository extends EloquentBaseRepository implements TbAppointmentRepository {
    public function __construct()
    {
        parent::__construct(TbAppointment::class);
    }
}
