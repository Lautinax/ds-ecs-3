<?php

require_once 'modelo/direccion.php';
require_once 'modelo/facultad.php';
require_once 'modelo/carrera.php';
require_once 'modelo/alumno.php';


$d = new Direccion();
$d->Calle = 'Corrientes';
$d->Numero = '473';
$d->Ciudad = 'Rosario';


$f = new Facultad();
$f->Nombre = 'ISEI 4030';
$f->Direccion = $d;




$c = new Carrera();
$c->Nombre = 'Analista de Sistemas';
$c->Duracion = '3 años';
$c->Facultad = $f;


$a = new Alumno();
$a->Nombre = 'Lauty';
$a->Apellido = 'Ferraro';
$a->Carrera = $c;

$a->MostrarAlumno();