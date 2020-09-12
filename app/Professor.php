<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \App\ProfessorRole;


class Professor extends Model
{
    use SoftDeletes;

    protected $fillable = ['user_id', 'pin'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function professorSchedule()
    {
        return $this->hasMany(ProfessorSchedule::class);
    }

    public function roles()
    {
        return $this->belongsToMany(ProfessorRole::class, 'course_professor')->withPivot('course_id');
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class)->withPivot('professor_id', 'professor_role_id');
    }
}
