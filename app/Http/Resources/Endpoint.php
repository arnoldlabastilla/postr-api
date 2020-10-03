<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Endpoint extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'payload' => $this->payload ? json_decode($this->payload) : null,
            'description' => $this->description
        ];
    }
}
