<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ClassType extends Model
{
    use SoftDeletes;

    protected $fillable = ['name'];

    public function academicSchedule()
    {
        return $this->hasMany(AcademicSchedule::class);
    }
}
