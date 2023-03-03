<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BookingResource extends JsonResource
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
            "quote_id" => $this->quote_id,
            "hash" => $this->hash,
            "airline_code" => $this->airline_code,
            "flight_number" => $this->flight_number,
            "airport_code" => $this->airport_code,
            "flight_date_time" => $this->address,
            "name" => $this->name,
            "address" => $this->address,
            "pickup_date_time" => $this->pickup_date_time,
            "code" => $this->code,
            "quantity" => $this->quantity,
            "created_at" => $this->created_at,
            "updated_at" => $this->updated_at,
        ];
    }
}
