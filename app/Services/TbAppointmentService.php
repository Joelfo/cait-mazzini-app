<?php
namespace App\Services;

use App\Repositories\TbAppointmentRepository;

class TbAppointmentService extends BaseService
{
    public function __construct(TbAppointmentRepository $repository){
        $this->setRepository($repository);
    }
}