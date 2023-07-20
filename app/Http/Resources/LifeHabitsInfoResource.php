<?php

namespace App\Http\Resources;

use GDebrauwer\Hateoas\Traits\HasLinks;
use Illuminate\Http\Resources\Json\JsonResource;

class LifeHabitsInfoResource extends JsonResource
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
            'sexualHabitualLevel' => $this->sexual_habitual_level,
            'partnersQuantity' => $this->partners_quantity,
            'usesPreservative' => $this->uses_preservative,
            'usesPrep' => $this->uses_prep,
            'usesContraceptiveMethod' => $this->uses_contraceptive_method,
            'sexualHabitsObservation' => $this->sexual_habits_observation,
            'hasSatisfyingSleeping' => $this->has_satisfying_sleeping,
            'sleepingHoursPerNight' => $this->sleeping_hours_per_night,
            'mealsPerDay' => $this->meals_per_day,
            'waterCupsPerDay' => $this->water_cups_per_day,
            'eatingAndWaterObservation' => $this->eating_and_water_observation,
            'leisureTimeObservation' => $this->leisure_time_observation,
            '_links' => $this->links()
        ];
    }
}
