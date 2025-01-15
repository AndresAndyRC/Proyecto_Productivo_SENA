<?php
    include '../../controller/RolOperario/session_start.php';
    include 'head.php';
    include '../../controller/RolOperario/sql_queries.php';
        
    $con = conectar(); //funcion de conectar a bd
    $Pagos = consultarPagos($con); // funcion de consultar sup para tabla   
?>
    <!-- contenido pagina -->
    <div class="content">
        <h1>Registro de Pagos</h1>
        <!-- barra busqueda -->
        <div class="contenedorBarraBusqueda text-center">
        <!-- bloque para ubicar la barra de busqueda -->
            <div class="busqueda">   <!-- Bloque para ubicar la barra de busqueda -->
                <input type="text" class="form-control pull-right" style="width:300px" id="search" placeholder="Barra de busqueda"> <!-- barra de busqueda -->
            </div>
        </div> 
        <!-- tabla -->
        <div class="tabla">
            <!-- inicio tabla  -->
            <table>
                <thead id="table">
                <tr class="sticky">
                        <th>Placa</th>
                        <th>Entrada</th>
                        <th>Salida</th>
                        <th>Vehiculo</th>
                        <th>Tarifa</th>
                        <th>Valor</th>
                        <th>Imprimir</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($Pagos as $row):?>
                        <tr>
                            <td><?php echo $row['PagPlaca'];?></td>
                            <td><?php echo $row['PagHoraEnt'];?></td>
                            <td><?php echo $row['PagHoraSalir'];?></td>
                            <td><?php echo $row['PagTipoVeh'];?></td>
                            <td><?php echo $row['PagTarifa'];?></td> 
                            <td><?php echo $row['PagValor'];?></td>                                                       
                            <td><a href="#" class="btn-ImpPag" data-id="<?php $ImpPag = reciboPago($con, $row['PagId']);?>"><i class="fa-solid fa-print"></i></a></td>       
                        </tr>                       
                    <?php endforeach;?>
                </tbody> 
            </table>
        </div>
        <!-- fin tabla -->  
    </div>
    <?php
        include 'ReciboPago.php';    
    ?>
    <!-- javascript -->
    <!-- Script para realizar la busqueda: -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> <!-- jquery para realizar la busqueda -->   
    <!-- modales -->
    <script src="../../js/modal.js"></script>
    <script src="../../js/menu.js"></script>   
</body>
    <!-- Fin body -->
</html>