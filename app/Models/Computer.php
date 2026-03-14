<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Computer extends Model
{
    use HasFactory;

    //Relacion de Uno a Uno con Apprentice
    public function apprentice(){
        return $this->hasOne('App\Models\Apprentice');
    }
}
