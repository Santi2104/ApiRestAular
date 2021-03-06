<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProfessorResource extends JsonResource
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
            'name' => $this->user->name,
            //'role' => $this->roles()->wherePivot('course_id', 277)->get()
            //'role' => ProfessorRoleResource::collection($this->roles()->wherePivot('course_id', 'course_id')->get())
        ];
    }
}
