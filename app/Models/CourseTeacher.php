<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseTeacher extends Model
{
    use HasFactory;

    //Relacion de Muchos a Muchos con Course y Teacher
    public function course(){
        return $this->belongsTo('App\Models\Course');
    }

    public function teacher(){
        return $this->belongsTo('App\Models\Teacher');
    }

}
