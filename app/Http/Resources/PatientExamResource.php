<?php

namespace App\Http\Resources;

use GDebrauwer\Hateoas\Traits\HasLinks;
use Illuminate\Http\Resources\Json\JsonResource;

class PatientExamResource extends JsonResource
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
            'filePath' => $this->file_path,
            'date' => $this->date,
            '_links' => $this->links()  
        ];
    }
}
