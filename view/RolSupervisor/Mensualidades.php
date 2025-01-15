<?php
    include '../../controller/RolSupervisor/session_start.php';
    include 'head.php';
    include '../../controller/RolSupervisor/sql_queries.php';
    // hora local
    date_default_timezone_set('America/Bogota');
    //variables
    $horalocal = date("Y-m-d");
     
    $con = conectar(); //funcion de conectar a bd
    $conMen = consultarMen($con); // funcion de consultar sup para tabla 
?>
    <!-- contenido pagina -->
    <div class="content">
        <h1>Registro de Mensualidades</h1>
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
                        <th>Vehiculo</th>
                        <th>Valor</th>
                        <th>Fecha Inicio</th>
                        <th>Fehca Fin</th>
                        <th>Estado</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($conMen as $row):?>
                        <tr>
                            <td style="display:none;"><?php echo $row['MenId'];?></td>    
                            <td><?php echo $row['MenPlaca'];?></td>
                            <td><?php echo $row['MenVehiculo'];?></td>
                            <td><?php echo $row['MenValor'];?></td>
                            <td><?php echo $row['MenFecha_Ini'];?></td>
                            <td><?php echo $row['MenFecha_Fin'];?></td>  
                            <td><?php echo $row['MenEstado'];?></td>                          
                            <td><a href="#" class="btn-editMen" data-id="<?php $ediMen = editarMen($con, $row['MenId']);?>"><i class="fa-solid fa-pen-to-square"></i></a></td>                            
                            <td><a href="../../controller/RolSupervisor/sql_queries.php?MenId=<?php echo $row['MenId'];?>"onclick="return confirm ('Desea eliminar la mensualidad que corresponde al vehiculo de placa: <?php echo $row['MenPlaca'];?>')" class="btn-delete"><i class="fa-solid fa-trash"></i></a></td>
                        </tr>                       
                    <?php endforeach;?>
                </tbody> 
            </table>
        </div>
        <!-- fin tabla -->
        <!-- inicio boton agregar -->
        <div>
            <a href="#" id="btnAge" class="btn-ageMen">AGREGAR</a> <!-- la clase se usa para el .js abrir modal  -->
        </div>
        <!-- fin boton agregar -->   
    </div>
    <?php
        include 'modalRegMen.php';
        include 'modalEdiMen.php';    
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