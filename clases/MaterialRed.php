<?php

    class MaterialRed extends Conexion{
        public function obtenerDatos(){
            try {
                $conexion=parent::conectar();
                $coleccion=$conexion->materiales_red;
                $datos=$coleccion->find();
                return $datos;
            } catch (\Throwable $th) {
                
                return $th->getMessage();
            }
        }

        
    }

?>