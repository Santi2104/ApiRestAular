<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ClassroomResource extends JsonResource
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
            'id' => $this->id,
            'name' => $this->name,
            'volume' => $this->volume,
            'equipment' => $this->equipment,
            'key' => $this->key,
            'status' => $this->status,
            'building' => new BuildingResource($this->building),
            'class_room_type' => new ClassRoomTypeResource($this->classRoomType)
        ];
    }
}
