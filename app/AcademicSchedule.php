<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class AcademicSchedule extends Model
{

    protected $fillable = ['course_id', 'classroom_id', 'user_id' ,'class_type_id' ,'description', 'message', 'status', 'day', 'start', 'end', 'duplicate'];

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
        return $this->hasMany(Schedule::class);
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

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
