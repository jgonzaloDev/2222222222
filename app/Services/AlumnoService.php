<?php

namespace App\Services;

use App\DTO\AlumnoDTO;
use App\Models\Alumno;

class AlumnoService{

    public function listAll(){
        $alumnos=Alumno::all();
        $alumnosDTO=$alumnos->map(function($alumno){
            return new AlumnoDTO($alumno->id,$alumno->matricula,$alumno->nombre,$alumno->fecha_nacimiento,$alumno->telefono,
            $alumno->email,$alumno->nivel_id);
        });
        return $alumnosDTO;
    }

    public function findDetail($id){
        $alumno=Alumno::find($id);
        $alumnoDTO=new AlumnoDTO($alumno->id,$alumno->matricula,$alumno->nombre,$alumno->fecha_nacimiento,$alumno->telefono,
                $alumno->email,$alumno->nivel_id);
        // return response()->json($alumnoDTO);
        return $alumnoDTO;
    }

    public function create(AlumnoDTO $alumnoDTO){
        $alumno=new Alumno();
        $alumno->id=$alumnoDTO->id;
        $alumno->matricula=$alumnoDTO->matricula;
        $alumno->nombre=$alumnoDTO->nombre;
        $alumno->fecha_nacimiento=$alumnoDTO->fecha_nacimiento;
        $alumno->telefono=$alumnoDTO->telefono;
        $alumno->email=$alumnoDTO->email;
        $alumno->nivel_id=$alumnoDTO->nivel_id;
        $alumno->save();
        return new AlumnoDTO($alumno->id, $alumno->matricula,$alumno->nombre,$alumno->fecha_nacimiento,$alumno->telefono,
            $alumno->email,$alumno->nivel_id);
    }

    public function update(AlumnoDTO $alumnoDTO,$id){
        $alumno=Alumno::find($id);
        $alumno->matricula=$alumnoDTO->matricula;
        $alumno->nombre=$alumnoDTO->nombre;
        $alumno->fecha_nacimiento=$alumnoDTO->fecha_nacimiento;
        $alumno->telefono=$alumnoDTO->telefono;
        $alumno->email=$alumnoDTO->email;
        $alumno->nivel_id=$alumnoDTO->nivel_id;
        $alumno->save();
        $alumnoDTO->id=$id;
        return $alumnoDTO;
    }
}