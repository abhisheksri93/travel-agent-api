<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PassengerResource extends JsonResource
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
            "id" => $this->id,
            "title" => $this->title,
            "name" => $this->name,
            "surname" => $this->surname,
            "email" => $this->email,
            "mobile_country_code" => $this->mobile_country_code,
            "mobile_phone" => $this->mobile_phone,
            "created_at" => $this->created_at,
            "updated_at" => $this->updated_at,
        ];
    }
}
