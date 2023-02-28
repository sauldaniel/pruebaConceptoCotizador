<?php   
        include "../clases/MaterialElectrico.php";
        include "../clases/MaterialRed.php";

        $matElectrico= new MaterialElectrico();
        $materialElectrico=$matElectrico->obtenerDatos();

        $matRed= new MaterialRed();
        $materialRed=$matRed->obtenerDatos();
?>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalAgregar">
    Agregar cotización
</button>

<!-- Modal -->
<div class="modal fade" id="modalAgregar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Agregar levantamiento</h5>
            </div>
            <div class="modal-body">
                <div class="moduloGeneralLevantamiento">
                <!-- ELECTRICO -->
                <h2>Material eléctrico</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Articulo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row"><input type="text" placeholder="0"></th>
                            <form action="#" method="post">
                                <td><input list="articulosElectricos" placeholder="Tuberia/Accesorios"/>
                                </td>
                            </form>
                        </tr>

                        <tr>
                            <th scope="row"><input type="text" placeholder="0"></th>
                            <td><input list="articulosElectricos" placeholder="Tuberia/Accesorios"/>
                            </td>
                        </tr>



                    </tbody>
                </table>
                </div>


                <div class="moduloGeneralLevantamiento">
                <!-- RED -->
                <h2>Material de red</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Articulo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row"><input type="text" placeholder="0"></th>
                            <form action="#" method="post">
                                <td><input list="articulosRed" placeholder="Jacks/Patchcord">
                                    </input>
                                </td>
                            </form>
                        </tr>

                        <tr>
                            <th scope="row"><input type="text" placeholder="0"></th>
                            <td><input list="articulosRed" placeholder="Jacks/Patchcord">
                                </input>
                            </td>
                        </tr>



                    </tbody>
                </table>
                </div>

                
                <div class="moduloGeneralLevantamiento">
                <!-- PLATAFORMA DE ELEVACIÓN -->
                <h2>Plataforma de elevación</h2>
                <form action="" method="post">
                    <input type="checkbox" name="escalera" />Escalera
                    <input type="checkbox" name="elevadorTijera"/> Elevador de tijera                    
                    <input type="checkbox" name="elevadorJirafa"/> Elevador articulado
                </form>
                </div>
                

                <div class="moduloGeneralLevantamiento">
                <!-- TIEMPO ESTIMADO DE TRABAJO -->
                <h2>Tiempo estimado de trabajo</h2>
                <form action="" method="post">
                    <input type="text" placeholder="Días">
                </form>
                </div>

                <div class="moduloGeneralLevantamiento">
                <!-- CANTIDAD DE TRABJADORES -->
                <h2>Técnicos</h2>
                <form action="" method="post">
                    <input type="text" placeholder="Cantidad">
                </form>
                </div>

                


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary">Guardar levantamiento</button>
            </div>
        </div>
    </div>
</div>



<!-- LISTA ARTICULOS ELECTRICOS-->
<datalist id="articulosElectricos">
    <?php
                foreach($materialElectrico as $item){
            ?>
    <option value="<?php echo $item->descripcion ?>" />
    <?php
                }
            ?>
</datalist>

<!-- LISTA ARTICULOS ELECTRICOS-->
<datalist id="articulosRed">
    <?php
                foreach($materialRed as $item){
            ?>
    <option value="<?php echo $item->descripcion ?>" />
    <?php
                }
            ?>
</datalist>

