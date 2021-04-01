<?php

namespace App\Http\Resources\Student;

use Illuminate\Http\Resources\Json\JsonResource;

class StudentAcademicSchedules extends JsonResource
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
            'classroom' => new StudentClassroom($this->classroom),
            'course' => new StudentCourse($this->course),
            'day' => $this->day,
            'start' => $this->start,
            'end' => $this->end,
            'group' => $this->group
        ];
    }
}
