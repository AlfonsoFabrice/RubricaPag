<?php

$SERVIDOR='localhost';
$usuario='root';
$pass='';
$bd='compras';

$conexion= new mysqli($SERVIDOR,$usuario,$pass,$bd);

if ($conexion->connect_errno){
    echo "Error de conexion{$conexion->connect_errno}";
}
?>