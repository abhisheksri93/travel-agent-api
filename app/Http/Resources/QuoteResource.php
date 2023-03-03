<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class QuoteResource extends JsonResource
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
            "currency" => $this->currency,
            "origin" => $this->origin,
            "destination" => $this->destination,
            "passengers" => $this->passengers,
            "outwardDate" => $this->outwardDate,
            "returnDate" => $this->returnDate,
            "exchangeCurrencies" => $this->exchangeCurrencies,
            "created_at" => $this->created_at,
            "updated_at" => $this->updated_at,
        ];
    }
}
