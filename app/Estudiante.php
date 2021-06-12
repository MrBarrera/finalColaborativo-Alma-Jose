<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{

    protected $guarded = ['idestudiante'];
    protected $primaryKey = 'idestudiante';
    protected $table = 'estudiante';
}
