<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    public $timestamps = false;
    protected $table="carreras"; //
    protected $primaryKey = 'id_carrera';
    public $incrementing = false;
}
