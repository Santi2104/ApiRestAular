<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class AcademicSchedule extends Model
{

    protected $fillable = ['course_id', 'classroom_id', 'schedule_id', 'class_type_id' ,'description', 'message', 'status'];

    public function course()
    {
        return $this->belongsToMany(Course::class);
    }

    public function classroom()
    {
        return $this->belongsToMany(Classroom::class);
    }

    public function schedule()
    {
        return $this->belongsToMany(Schedule::class);
    }

    public function classType()
    {
        return $this->belongsTo(ClassType::class);
    }
}
