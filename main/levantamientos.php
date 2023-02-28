
<?php   include "header.php";
        include "../clases/Conexion.php";
        include "../clases/Levantamientos.php";
        require_once "../clases/Conexion.php";
        $levantamientos= new Levantamientos();
        $datos=$levantamientos->obtenerDatos();

        
?>

<h1>Levantamientos</h1>

<div class="mainLevantamientos">

  
<?php include "modalAgregarLevantamiento.php";?>

    <?php
        foreach($datos as $item){
    ?>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Cotizacion</th>
      <th scope="col">Material eléctrico</th>
      <th scope="col">Material de red</th>
      <th scope="col">Elevación</th>
      <th scope="col">Tiempo estimado</th>
      <th scope="col">Cantidad de técnicos</th>
      <th scope="col">Otros</th>
      <th scope="col">Modificar</th>
      <th scope="col">Eliminar</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><?php echo $item->idLevantamiento; ?></th>
      <td><?php echo $item->cotizacion; ?></td>
      <td><?php foreach($item->materialElectrico as $subItem)
        echo $subItem; ?></td>
      <td><?php foreach($item->materialRed as $subItem)
        echo $subItem; ?></td>
      <td><?php echo $item->elevacion; ?></td>
      <td><?php echo $item->tiempoActividad; ?></td>
      <td><?php echo $item->cantidadTecnicos; ?></td>
      <td><?php echo $item->otros; ?></td>
      <td><button type="button" class="btn btn-secondary">Editar</button></td>
      <td><button type="button" class="btn btn-danger">Eliminar</button></td>
    </tr>
  </tbody>
</table>

    <?php } ?>

    <a href="index.php"><td><button type="button" class="btn btn-primary">Regresar</button></td></a>

</div>

<?php include "scripts.php";?>