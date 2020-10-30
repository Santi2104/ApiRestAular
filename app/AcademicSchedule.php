<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class AcademicSchedule extends Model
{

    protected $fillable = ['course_id', 'classroom_id', 'schedule_id', 'class_type_id' ,'description', 'message', 'status', 'day', 'start', 'end'];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function classroom()
    {
        return $this->belongsTo(Classroom::class);
    }

    public function schedule()
    {
        return $this->belongsToMany(Schedule::class, 'academic_schedule_union');
    }

    public function classType()
    {
        return $this->belongsTo(ClassType::class);
    }

    public function professorSchedule()
    {
        return $this->hasMany(ProfessorSchedule::class);
    }

    public function students()
    {
        return $this->belongsToMany(Student::class,'student_schedules');
    }
}
