<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfessorSchedule extends Model
{
    protected $fillable = ['professor_id', 'academic_schedule_id'];

    public function professors()
    {
        return $this->belongsToMany(Student::class);
    }

    public function academicSchedule()
    {
        return $this->belongsToMany(AcademicSchedule::class);
    }
}
