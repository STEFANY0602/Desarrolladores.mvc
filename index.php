<?php

 //incluir los archivos
require_once "config/database.php";
include_once "controllers/proyectocontrollers.php";


// probar la conexion 
$db = Conexion::conectar();

$controlador = new proyectocontroller
$controlador->index();
 
 ?> 