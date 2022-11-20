<?php
namespace App\Repositories\Eloquent;

use App\Models\Patient;
use App\Repositories\PatientRepository;

class EloquentPatientRepository extends EloquentBaseRepository implements PatientRepository {
    protected $model = Patient::class;
}
