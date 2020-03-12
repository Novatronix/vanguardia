<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clase extends Model
{
    public $timestamps = false;
    protected $table="clases"; //
    protected $primaryKey = 'id_clase';
    public $incrementing = false;
}
