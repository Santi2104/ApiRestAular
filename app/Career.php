<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Career extends Model
{
    use SoftDeletes;

    protected $fillable = ['department_id', 'name', 'description', 'code'];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function courses()
    {
        return $this->hasMany(Course::class);
    }

    public function scopeWhereLike($query, $column, $value)
{
    return $query->where($column, 'like', '%'.$value.'%');
}
}
