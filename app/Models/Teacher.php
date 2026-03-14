<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    //Relación Uno a Muchos (Inversa) con Area
    public function area(){
        return $this->belongsTo('App\Models\Teacher');
    }

    # Relación Uno a Muchos (Inversa) con Training Centers
    public function training_center(){
        return $this->belongsTo('App\Models\TrainingCenter');
    }

    // Relacion de Muchos a Muchos con Course
    public function courses(){
        return $this->belongsToMany('App\Models\Course', 'course_teacher');
    }
}
