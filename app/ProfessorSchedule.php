<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfessorSchedule extends Model
{
    protected $fillable = ['professor_id', 'academic_schedule_id'];

    public function professor()
    {
        return $this->belongsTo(Professor::class);
    }

    public function academicSchedule()
    {
        return $this->belongsTo(AcademicSchedule::class);
    }

}
