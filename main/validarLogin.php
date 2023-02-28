<?php
    include "../clases/Conexion.php";
    include "../clases/Usuarios.php";
    require_once "../clases/Conexion.php";
    

    $correoE=$_POST['correo'];
    $pass=$_POST['contraseña'];

    $usuarios= new Usuarios();
    $datos=$usuarios->obtenerDatos();
    $encontrado=false;

    foreach($datos as $item)
        if($item->user == $correoE)
            $encontrado=true;
    
        
    if ($encontrado) {
        header("Location: index.php");
    exit();
    }
    else
        print_r("Usuario no encontrado");
?>