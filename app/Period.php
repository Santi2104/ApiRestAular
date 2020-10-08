<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Period extends Model
{
    use SoftDeletes;

    protected $fillable = ['name', 'display_name', 'start', 'end', 'description'];

    protected $dates = [
        'start',
        'end'
    ];

    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }

}
