<?php

class proyectocontroller
{

    public function __construct()
    {
        require_once "models/Proyecto.php";
    }

    /** listar todos los registros*//
    public function index()
    {
        $proyecto = new Proyecto();
        $date['proyectos'] =  $proyecto->listar();
        $data['titulo'] = "proyectos"
        // cargar la vista
        require_once "views/proyectos/index.php";
    }
}