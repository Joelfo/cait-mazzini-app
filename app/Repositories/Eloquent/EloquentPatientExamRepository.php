<?php
namespace App\Repositories\Eloquent;

use App\Models\PatientExam;
use App\Repositories\PatientExamRepository;

class EloquentPatientExamRepository extends EloquentBaseRepository implements PatientExamRepository {
    public function __construct()
    {
        parent::__construct(PatientExam::class);
    }

    public function getByChart(int $chartId)
    {
        return parent::getByManyToManyRelationship('charts', 'chart_id', $chartId);
    }
}
