<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
//private newgrade
{
    public function setGrade($newgrade){
        if($this->grade <= $newgrade) {
            $this->grade = $newgrade;
        }
        if($this->grade >= 5.5){
            $this->completed = true;
        }
        else{
            $this->completed = false;
        }
        $this->save();
    }
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
