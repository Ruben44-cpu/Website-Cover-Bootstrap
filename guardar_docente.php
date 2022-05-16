<?php

include 'db.php';

$cedula = $_POST['cedula'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$profesion = $_POST['profesion'];
$editar = $_POST['editar'];

$conexiondb = conectardb();

echo ("Se registro la persona.");

