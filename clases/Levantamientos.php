<?php

    class Levantamientos extends Conexion{
        public function obtenerDatos(){
            try {
                $conexion=parent::conectar();
                $coleccion=$conexion->levantamientos;
                $datos=$coleccion->find();
                return $datos;
            } catch (\Throwable $th) {
                return $th->getMessage();
            }
        }
    }

?>