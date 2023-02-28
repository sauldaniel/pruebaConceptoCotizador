<?php

    class MaterialElectrico extends Conexion{
        public function obtenerDatos(){
            try {
                $conexion=parent::conectar();
                $coleccion=$conexion->materiales_electricos;
                $datos=$coleccion->find();
                return $datos;
            } catch (\Throwable $th) {
                
                return $th->getMessage();
            }
        }

        
    }

?>