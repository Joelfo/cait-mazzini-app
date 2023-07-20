<?php
namespace App\Services;

use App\Repositories\NurseryIdentificationInfoRepository;

class NurseryIdentificationInfoService extends BaseService
{
    public function __construct(NurseryIdentificationInfoRepository $repository){
        $this->setRepository($repository);
    }

    public function getModelAttributesFromDTO($dto)
    {
        return [
            'civil_state' => $dto->civilState,
            'color' => $dto->color,
            'home_type' => $dto->homeType,
            'home_property_type' => $dto->homePropertyType,
            'scholarity' => $dto->scholarity,
            'ocupation' => $dto->ocupation,
            'has_potable_water' => $dto->hasPotableWater,
            'has_basic_sanitation' => $dto->hasBasicSanitation,
            'has_urban_cleaning_services' => $dto->hasUrbanCleaningServices,
            'religion' => $dto->religion,
            'children_number' => $dto->childrenNumber,
            'gender' => $dto->gender,
            'income_source' => $dto->incomeSource,
            'other_income_source' => $dto->otherIncomeSource,
            'is_spouse_a_housemate' => $dto->isSpouseAHousemate,
            'is_children_a_housemate' => $dto->isChildrenAHousemate,
            'is_parent_a_housemate' => $dto->isParentAHousemate,
            'other_housemates' => $dto->otherHousemates,
            'patient_id' => $dto->patient->id
        ];
    }

}
