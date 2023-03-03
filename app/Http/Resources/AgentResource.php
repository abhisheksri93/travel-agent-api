<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AgentResource extends JsonResource
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
            "name" => $this->name,
            "email" => $this->email,
            "number" => $this->number,
            "area" => $this->area,
            "address" => $this->address,
            "gst" => $this->gst,
            "areaofservice" => $this->areaofservice,
            "servicestaken" => $this->servicestaken,
            "commission" => $this->commission,
            "created_at" => $this->created_at,
            "updated_at" => $this->updated_at,
        ];
    }
}
