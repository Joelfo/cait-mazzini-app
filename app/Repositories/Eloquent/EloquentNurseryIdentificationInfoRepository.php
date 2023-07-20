<?php
namespace App\Repositories\Eloquent;

use App\Models\NurseryIdentificationInfo;
use App\Repositories\NurseryIdentificationInfoRepository;

class EloquentNurseryIdentificationInfoRepository extends EloquentBaseRepository implements NurseryIdentificationInfoRepository {
    public function __construct()
    {
        parent::__construct(NurseryIdentificationInfo::class);
    }
}
