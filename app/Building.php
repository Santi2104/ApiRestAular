<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Building extends Model
{
    use SoftDeletes;

    protected $fillable = ['name', 'display_name' ,'description'];

    public function classrooms()
    {
        return $this->hasMany(Classroom::class);
    }
}
