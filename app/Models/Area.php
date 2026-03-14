<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    //Relación uno a muchos.
    public function teachers(){
        return $this->hasMany('App\Models\Teacher');
    }

    //Relacion de Uno a Muchos con Course
    public function courses(){
        return $this->hasMany('App\Models\Course');
    }
}
