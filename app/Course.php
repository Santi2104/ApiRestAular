<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use SoftDeletes;
    
    protected $fillable = ['career_id', 'code', 'title' ,'description', 'period', 'year'];

    public function career()
    {
        return $this->belongsTo(Career::class);
    }

    public function academicSchedule()
    {
        return $this->hasMany(AcademicSchedule::class);
    }

    public function professors()
    {
        return $this->belongsToMany(Professor::class);
    }

    public function roles()
    {
        return $this->belongsToMany(ProfessorRole::class,'course_professor');
    }

}
