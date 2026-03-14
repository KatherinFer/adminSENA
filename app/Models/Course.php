<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    // Relacion de Uno a Muchos con Apprentice
    public function apprentices(){
        return $this->hasMany('App\Models\Apprentice');
    }

    // Relacion de Uno a Muchos (Inversa) con Training Center
    public function training_centers(){
        return $this->belongsTo('App\Models\TrainingCenter');
    }

    //Relacion de Uno a Muchos (Inversa) con Area
    public function areas(){
        return $this->belongsTo('App\Models\Area');
    }

    // Relacion de Muchos a Muchos con Teacher
    public function teachers(){
        return $this->belongsToMany('App\Models\Teacher', 'course_teacher');
    }
}
