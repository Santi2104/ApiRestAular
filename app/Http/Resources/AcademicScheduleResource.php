<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AcademicScheduleResource extends JsonResource
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
            'status' => $this->status,
            //'course' => new CourseResource($this->course),
            'classroom' => new ClassroomResource($this->classroom),
            'class_type' => new ClassTypeResource($this->classType),
            'schedule' => new ScheduleResource($this->schedule)
        ];
    }
}
