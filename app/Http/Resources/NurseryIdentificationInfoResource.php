<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class NurseryIdentificationInfoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'civilState' => $this->civil_state,
            'color' => $this->color,
            'homeType' => $this->home_type,
            'homePropertyType' => $this->home_property_type,
            'scholarity' => $this->scholarity,
            'ocupation' => $this->ocupation,
            'hasPotableWater' => $this->has_potable_water,
            'hasBasicSanitation' => $this->has_basic_sanitation,
            'hasUrbanCleaningServices' => $this->has_urban_cleaning_services,
            'religion' => $this->religion,
            'childrenNumber' => $this->children_number,
            'gender' => $this->gender,
            'incomeSource' => $this->incomeSource,
            'otherIncomeSource' => $this->otherincomeSource,
            'isSpouseAHousemate' => $this->is_spouse_a_housemate,
            'isChildrenAHousemate' => $this->is_children_a_housemate,
            'isParentAHousemate' => $this->is_parent_a_housemate,
            'otherHousemates' => $this->other_housemates
        ];
    }
}
