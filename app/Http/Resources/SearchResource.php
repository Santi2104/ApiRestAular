<?php

namespace App\Http\Resources;

use App\Http\Resources\Student\StudentAcademicSchedules;
use Illuminate\Http\Resources\Json\JsonResource;

class SearchResource extends JsonResource
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
            'academicschedule' => new StudentAcademicSchedules($this->academicSchedule)
        ];
    }
}
