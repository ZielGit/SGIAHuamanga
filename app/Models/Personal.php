<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\FuncCall;

class Personal extends Model
{
    use HasFactory;
    
    //especificando tabla
    //protected $table = "personals";

    /*
    //relacion muchos a muchos
    public function asistencias(){
        return $this->belongsToMany('App\Models\Personal');
    }*/

    //Relacion uno a muchos
    public function asistencias(){
        return $this->hasMany('App\Models\Asistencia');
    }
}
