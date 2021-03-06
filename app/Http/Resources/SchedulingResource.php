<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class SchedulingResource extends JsonResource
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
            'identify' => $this->uuid,
            'patient' => $this->patient->name,
            'date and hour ' => Carbon::make($this->scheduling)->format('d/m/Y H:i:s'),
        ];
    }
}
