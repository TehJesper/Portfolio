<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['name', 'ecs'];

    public function assignments()
    {
        return $this->hasMany(Assignment::class);
    }
}
