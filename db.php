<?php
    function conectardb() {
        $servidor = 'localhost';
        $usuario = 'root';
        $contraseña = '';
        $personadb = 'app_web';

        $conexion = mysqli_connect($servidor, $usuario, $contraseña, $personadb);

        return $conexion;
    }
?>