<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcademicScheduleUnion extends Model
{
    use HasFactory;

    protected $fillable = ['schedule_id', 'academic_schedule_id' ];

    

}
