<?php

class proyecto 
{
    private $db;
    private $proyectos;

    public function __construct()
    {
        $this->db = conexion::conectar();
        $this->proyectos = array();
    }

    /** lista todos los registros de la tabla*/
    public function listar()
    {
        $sql = "SELECT * FROM proyecto";
        $resultado = $this->query($sql);

        if(!$resultado)
        {
                echo "estamos experimentado problemas, por favor intente mas tarde." PHP_OEL;
                // Esto es para nosotros mientras desarrollamos 
                echo "error en consulta: $sql" . PHP_EOL
                echo "erno de depuracion: " . mysqli_connect_erno() . PHP_EOL;
                echo "error de depuracion: " . mysql_connect_error() . php_EOL;  
                exit;
        }
        // si todo esta bien:
        while( $row = $resultado->fetch_assoc())
        {
            $this->proyectos[] = $row;
        }

        return $this->proyectos;
    }