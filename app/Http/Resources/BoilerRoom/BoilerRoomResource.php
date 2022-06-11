<?php

namespace App\Http\Resources\BoilerRoom;

use Illuminate\Http\Resources\Json\JsonResource;

class BoilerRoomResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return parent::toArray($request);
    }

    public static function hi(): string
    {
        return 'hi';
    }
}
