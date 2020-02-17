<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dashboard extends Model
{
    protected $fillable = ['cursus', 'toets', 'ec', 'resultaat'];
}
