<?php

namespace App\DTO;

use Carbon\Carbon;

class AlumnoDTO{
    public int $id;
    public string $matricula;
    public string $nombre;
    public Carbon $fecha_nacimiento;
    public string $telefono;
    public string $email;
    public int $nivel_id;

    public function __construct(int $id,string $matricula,string $nombre,$fecha_nacimiento,string $telefono,string $email,int $nivel_id){
        $this->id=$id;
        $this->matricula=$matricula;
        $this->nombre=$nombre;
        $this->fecha_nacimiento=$fecha_nacimiento instanceof Carbon ? $fecha_nacimiento:Carbon::parse($fecha_nacimiento);
        $this->telefono=$telefono;
        $this->email=$email;
        $this->nivel_id=$nivel_id;
    }

    public function validate(){
        return validator([
            'matricula'=>'required|unique:alumnos|max:10',
            'nombre'=>'required|max:255',
            'fecha'=>'required|date',
            'telefono'=>'required',
            'email'=>'nullable|email',
            'nivel'=>'required'
        ]);
    }

    
}






