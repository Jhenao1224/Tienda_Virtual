<?php

$conexion = mysqli_connect("localhost", "root", "nalop21nlap","tiendaonline_db");

if($conexion){
    echo 'conecto existosamente a la base de datos';
} else {
    echo 'no se conecto';
}