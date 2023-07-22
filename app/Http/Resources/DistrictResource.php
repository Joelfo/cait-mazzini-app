<?php

namespace App\Http\Resources;

use GDebrauwer\Hateoas\Traits\HasLinks;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @OA\Schema(
 *   schema="Patient",
 *   description="A Patient of CAIT Mazzini Bueno",
 *   @OA\Property(property="id", type="number", example="7"),
 *   @OA\Property(property="name", type="string", example="Centro"),
 *   @OA\Property(
 *     property="_links",
 *     type="array",
 *     example={
 *      {"rel": "self", "type": "get", "href": "http://localhost:8000/api/districts/7"},
 *      {"rel": "city", "type": "get", "href": "http://localhost:8000/api/cities/2"}
 *     },
 *     @OA\Items(
 *       @OA\Property(property="rel", type="string"),
 *       @OA\Property(property="type", type="string"),
 *       @OA\Property(property="href", type="string")
 *   ),
 * ))
 */
class DistrictResource extends JsonResource
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
            'city' => new BaseModelResource($this->city),
            '_links' => $this->links()
        ];
    }
}
