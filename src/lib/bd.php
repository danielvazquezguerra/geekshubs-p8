<?php

$localhost = 'localhost';
$root = 'root';
$password = '';
$bd = 'proyecto_ejemplo';

function conexion($localhost = "localhost", $root = "root", $password = "", $bd  = "proyecto-ejemplo"){

    $conector = new mysqli($localhost, $root, $password, $bd);
    return $conector;

}

$conector = conexion($localhost, $root, $password, $bd);

function getPlatos($conector){
    $resultado = $conector->query("SELECT * FROM `platos`");
    return $resultado;

}


?>