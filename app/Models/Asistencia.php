<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{
    use HasFactory;
   
  
    /*
    //relacion muchos a muchos
    public function personals(){
        return $this->belongsToMany('App\Models\Personal');
    }*/

    //Relacion uno a muchos pero (inversa)
    public function personal(){
        return $this->belongsTo('App\Models\Personal');
    }
}
