<?php

class conexion
{
    public static funcion conectar()
{
    $servername = " 127-0-0.1"
    $username = "root";
    $password = "";
    $database = "empresa";

    $conn = mysqli_connect($serverame, $username, $password, $database);
    
    if (!$conn) {
        echo "Estamos experimentando problemas, por favor intente mas tarde." . PHP_EOL;

        echo "Error: no se pudo conectar a MYSQL." . PHP_EOL;
        echo "erno de depuracion: " . mysqli_connect_erno() . PHP_EOL;
        echo "error de depuracion: " mysql_connect_error() . php_EOL; 
        exit;
    }
    
    echo "!Conectado!";

    return $conn;
}