<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentSchedule extends Model
{
    protected $fillable = ['student_id', 'academic_schedule_id',' color'];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function academicSchedule()
    {
        return $this->belongsTo(AcademicSchedule::class);
    }
}
