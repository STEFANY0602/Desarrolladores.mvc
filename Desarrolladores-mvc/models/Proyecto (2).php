<?php
     class proyecto
     {
         private$db;
         private $proyectos;

         public function __construct()
         {
             $this->db= Conexion ::conectar();
             $this->proyectos=array();
             
         }
        //  listar todos los campos de la tabla proyecto
        public function listar()
        {
            $sql="SELECT*FROM proyecto";
            $resultado=$this->db->query($sql);
            // para probar la conexio
            if (!$resultado) {
                echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
                echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
                echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
                exit;
    
            }
            // si todo esta bien 
            while($row = $resultado->fetch_assoc() )
            {
                $this->proyectos[]=$row;
            }

            return $this->proyectos;
        }
     }
    
?>