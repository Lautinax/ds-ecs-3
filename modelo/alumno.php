<?php

class Alumno
{
    public $Nombre;
    public $Apellido;
    public $Carrera;

    public function MostrarAlumno()
    {

        
        echo 'Datos del alumno: <br>';
        echo 'Nombre: ' . $this->Nombre . '<br>';
        echo 'Apellido: ' . $this->Apellido . '<br><br>';

        echo 'Datos de la carrera: <br>';
        echo 'Nombre: ' . $this->Carrera->Nombre . '<br>';
        echo 'Duracion: ' . $this->Carrera->Duracion . '<br><br>';


        echo 'Datos de la facultad: <br>';
        echo 'Nombre: ' . $this->Carrera->Facultad->Nombre . '<br><br>';


        echo 'Datos de la direccion: <br>';
        echo 'Calle: ' . $this->Carrera->Facultad->Direccion->Calle . '<br>';
        echo 'Numero: ' . $this->Carrera->Facultad->Direccion->Numero . '<br>';
        echo 'Ciudad: ' . $this->Carrera->Facultad->Direccion->Ciudad . '<br>';
    }
}