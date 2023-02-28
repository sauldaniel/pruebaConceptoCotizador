<?php

    class Usuarios extends Conexion{
        public function obtenerDatos(){
            try {
                $conexion=parent::conectar();
                $coleccion=$conexion->usuarios;
                $datos=$coleccion->find();
                return $datos;
            } catch (\Throwable $th) {
                return $th->getMessage();
            }
        }
    }

?>