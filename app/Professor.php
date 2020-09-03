<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


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
        return $this->hasManyThrough(ProfessorRole::class, ProfessorSchedule::class, 'professor_role_id', 'id');
    }
}
