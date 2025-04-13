<?php

namespace Database\Seeders;

use App\Models\Alumno;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $alumno1=new Alumno();
        $alumno1->matricula='1234567';
        $alumno1->nombre='Juan Perez';
        $alumno1->fecha_nacimiento='1992-10-06';
        $alumno1->telefono='991256881';
        $alumno1->email='juanperez@gmail.com';
        $alumno1->nivel_id=1;

        $alumno1->save();

        $alumno2=new Alumno();
        $alumno2->matricula='1441167';
        $alumno2->nombre='Mario Bross';
        $alumno2->fecha_nacimiento='1997-10-06';
        $alumno2->telefono='991776881';
        $alumno2->email='mario.bross@gmail.com';
        $alumno2->nivel_id=5;

        $alumno2->save();
    }
}
