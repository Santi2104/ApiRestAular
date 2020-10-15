<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Schedule extends Model
{
    use SoftDeletes;

    protected $fillable = ['period_id', 'start', 'end', 'color'];

    public function period()
    {
        return $this->belongsTo(Period::class);
    }

    public function academicSchedule()
    {
        return $this->HasMany(AcademicSchedule::class);
    }
}
