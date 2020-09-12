<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfessorRole extends Model
{
    public function professorSchedules()
    {
        return $this->hasMany(ProfessorSchedule::class);
    }

    public function professors()
    {
        return $this->belongsToMany(Professor::class,'course_professor');
    }
}
