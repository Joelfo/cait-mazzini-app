<?php

namespace App\Http\Resources;

use GDebrauwer\Hateoas\Traits\HasLinks;
use Illuminate\Http\Resources\Json\JsonResource;

use OpenApi\Annotations as OA;

/**
 * @OA\Schema(
 *   schema="PatientResource",
 *   description="Recurso representando um paciente do CAIT Mazzini Bueno",
 *   @OA\Property(property="id", type="number", example="29"),
 *   @OA\Property(property="name", type="string", example="Moisés"),
 *   @OA\Property(property="susCard", type="string", example="12345678"),
 *   @OA\Property(property="rg", type="string", example="123456789"),
 *   @OA\Property(property="cpf", type="string", example="12345678910"),
 *   @OA\Property(property="admissionDate", type="string", example="11-11-2020"),
 *   @OA\Property(property="type", type="string", example="TB"),
 *   @OA\Property(property="arrival", type="string", example="Referenciado"),
 *   @OA\Property(property="telephone1", type="string", example="21999999999"),
 *   @OA\Property(property="telephone2", type="string", example="2155555555"),
 *   @OA\Property(property="cep", type="string", example="21111050"),
 *   @OA\Property(property="isPregnant", type="bool", example="false"),
 *   @OA\Property(property="birthDate", type="string", example="21-02-1954"),
 *   @OA\Property(property="recordCode", type="string", example="TB99999"),
 *   @OA\Property(property="motherName", type="string", example="Rute"),
 *   @OA\Property(property="address", type="string", example="Rua do Nunca, número 999, apartamento 1851"),
 *   @OA\Property(
 *     property="_links",
 *     type="array",
 *     example={
 *      {"rel": "self", "type": "get", "href": "http://localhost:8000/api/patients/29"},
 *      {"rel": "district", "type": "get", "href": "http://localhost:8000/api/districts/3"},
 *      {"rel": "healthUnity", "type": "get", "href": "http://localhost:8000/api/healthUnities/2"}
 *     },
 *     @OA\Items(
 *       @OA\Property(property="rel", type="string"),
 *       @OA\Property(property="type", type="string"),
 *       @OA\Property(property="href", type="string")
 *   ),
 * ))
 */
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
        'admissionDate' => $this->admission_date->format('d/m/Y'),
        'type' => $this->type,
        'arrival' => $this->arrival,
        'telephone1' => $this->telephone_1,
        'telephone2' => $this->telephone_2,
        'cep' => $this->cep,
        'isPregnant' => $this->pregnant,
        'birthDate' => $this->birth_date->format('d/m/Y'),
        'recordCode' => $this->record_code,
        'motherName' => $this->mother_name,
        'street' => $this->street,
        'number' => $this->number,
        'specialPopulation' => $this->special_population_type,
        'birthplace' => $this->birthplace,
        'district' => new BaseModelResource($this->district),
        'healthUnity' => $this->healthUnity != null ? new BaseModelResource($this->healthUnity) : null,
        '_links' => $this->links()
        ];
    }
}
