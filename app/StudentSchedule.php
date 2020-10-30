<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentSchedule extends Model
{
    protected $fillable = ['student_id', 'academic_schedule_id',' color'];

}
