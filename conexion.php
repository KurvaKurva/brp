<?php

$conexion = mysqli_connect("localhost", "root", "", "prueba" );
if(mysqli_connect_errno())
{
    echo "Falló conexión:".mysqli_connect_errno();
    exit;
}

