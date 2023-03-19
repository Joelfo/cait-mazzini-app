<?php

namespace App\Http\Resources;

use GDebrauwer\Hateoas\Traits\HasLinks;
use Illuminate\Http\Resources\Json\JsonResource;

class PatientResource extends JsonResource
{
    use HasLinks;
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
        'id' => $this->id,
        'name' => $this->name, 
        'susCard' => $this->sus_card, 
        'rg' => $this->rg, 
        'cpf' => $this->cpf, 
        'admissionDate' => $this->admission_date, 
        'type' => $this->type, 
        'arrival' => $this->arrival, 
        'telephone1' => $this->telephone_1, 
        'telephone2' => $this->telephone_2, 
        'cep' => $this->cep, 
        'pregnant' => $this->pregnant, 
        'birthDate' => $this->birth_date,
        'recordCode' => $this->record_code, 
        'motherName' => $this->mother_name, 
        'address' => $this->address,
        '_links' => $this->links()
        ];
    }
}
