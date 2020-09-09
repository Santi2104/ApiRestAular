<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseProfessor extends Model
{
    protected $fillable = ['professor_id', 'course_id', 'professor_role_id'];
}
