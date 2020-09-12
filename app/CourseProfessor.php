<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class CourseProfessor extends Pivot
{
    protected $fillable = ['professor_id', 'course_id', 'professor_role_id'];

    protected $table = 'course_professor';
}
