<?php

namespace App\Imports;

use App\Alumno;
use Maatwebsite\Excel\Concerns\ToModel;

class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Alumno([
           'id_alumno'    => $row[0],
           'nombre'       => $row[1], 
           'apellidos'    => $row[2],
           'fecha_ingreso'=> $row[3],
           'genero'       => $row[4], 
           'telefono'     => $row[5],
           'estado'       => $row[6],
           'created_at'   => $row[7],
           'updated_at'   => $row[8],

            //
        ]);
    }
}
