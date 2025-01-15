<?php
    include '../../controller/RolOperario/session_start.php';
    include 'head.php';
    include '../../controller/RolOperario/sql_queries.php';
    // hora local
    date_default_timezone_set('America/Bogota');
    //variables
    $horalocal = date("Y-m-d H:i:s");
     
    $con = conectar(); //funcion de conectar a bd
    $conVeh = consultarVehi($con); // funcion de consultar sup para tabla   
?>
    <!-- contenido pagina -->
    <div class="content">
        <h1>Vehiculos Ingresados</h1>
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
            <table id="table">
                <thead>
                <tr class="sticky">
                        <th>Placa</th>
                        <th>Vehiculo</th>
                        <th>Modelo</th>
                        <th>Color</th>
                        <th>Hora de Ingreso</th>
                        <th>Imprimir</th>
                        <th>Pagar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($conVeh as $row):?>
                        <tr>
                            <td><?php echo $row['VehPlaca'];?></td>
                            <td><?php echo $row['VehTipo'];?></td>
                            <td><?php echo $row['VehModelo'];?></td>
                            <td><?php echo $row['VehColor'];?></td>
                            <td><?php echo $row['VehHoraEntrada'];?></td>  
                            <td><a href="#" class="btn-ImpIng" data-id="<?php $ImpIng = reciboIngreso($con, $row['VehPlaca']);?>"><i class="fa-solid fa-print"></i></a></td>                            
                            <td><a href="#" class="btn-Pag" data-id="<?php $Pago = formularioPago($con, $row['VehPlaca']);?>"><i class="fa-solid fa-money-bill"></i></a></td>
                        </tr>                       
                    <?php endforeach;?>
                </tbody> 
            </table>
        </div>
        <!-- fin tabla -->
        <!-- inicio boton agregar -->
        <div>
            <a href="#" id="btnAge" class="btn-ageVeh">AGREGAR</a> <!-- la clase se usa para el .js abrir modal  -->
        </div>
        <!-- fin boton agregar -->   
    </div>
    <?php
        include 'modalRegVeh.php';
        include 'ReciboIngreso.php';
        include 'modalPagar.php';    
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