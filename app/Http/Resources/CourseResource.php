<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CourseResource extends JsonResource
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
            'code' => $this->code .': '. $this->title,
            'career' => new CareerResource($this->career),
            'team' => ProfessorResource::collection($this->professors),
            'role' => ProfessorRoleResource::collection($this->roles)
        ];
    }
}
