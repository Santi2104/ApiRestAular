<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Classroom extends Model
{
    use SoftDeletes;

    protected $fillable = ['building_id' , 'class_room_type_id', 'name', 'volume', 'equipment' ,' key', 'status'];

    public function classRoomType()
    {
        return $this->belongsTo(ClassRoomType::class);
    }

    public function building()
    {
        return $this->belongsTo(Building::class);
    }

    public function academicSchedule()
    {
        return $this->belongsToMany(AcademicSchedule::class);
    }

}
