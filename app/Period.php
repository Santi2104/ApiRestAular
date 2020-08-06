<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Period extends Model
{
    use SoftDeletes;

    protected $fillable = ['name', 'display_name', 'start', 'end', 'description'];

    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }
}
