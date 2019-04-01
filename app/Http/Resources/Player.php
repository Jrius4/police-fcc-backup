<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Player extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return
            [
                'id' => $this->id,
                'first_name' => $this->first_name,
                'last_name' => $this->last_name,
                'nationality' => $this->nationality,
                'dob' => $this->dob,
                'age' => $this->age,
                'shirt_no' => $this->shirt_no,
                'position' => $this->position,
                'strongest_foot' => $this->strongest_foot,
                'former_club' => $this-> former_club,
                'bio' => $this-> bio,
                'created_at' => $this->created_at,
                'updated_at' => $this->updated_at,
            ];
    }
}
