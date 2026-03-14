<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apprentice extends Model
{
    use HasFactory;

    //Relacion de Uno a Uno (Inversa) con Computer
    public function computer(){
        return $this->belongsTo('App\Models\Computer');
    }

    //Relacion de Uno a Muchos (Inversa) con Course
    public function course(){
        return $this->belongsTo('App\Models\Course');
    }
}
