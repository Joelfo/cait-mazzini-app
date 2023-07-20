<?php
namespace App\Repositories\Eloquent;

use App\Models\PhysicalExam;
use App\Repositories\PhysicalExamRepository;

class EloquentPhysicalExamRepository extends EloquentBaseRepository implements PhysicalExamRepository {
    public function __construct()
    {
        parent::__construct(PhysicalExam::class);
    }
}
