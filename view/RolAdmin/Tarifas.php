<?php
    include '../../controller/RolAdmin/session_start.php';
    include 'head.php';
    include '../../controller/RolAdmin/sql_queries.php';
    $con = conectar(); //funcion de conectar a bd
    $conTar = consultarTar($con); // funcion de consultar sup para tabla 
     
?>
    <!-- contenido pagina -->
    <div class="content">
        <h1>Registro de Tarifas</h1>
        <!-- tabla -->
        <div class="tabla">
            <!-- inicio tabla  -->
            <table>
                <thead>
                    <tr class="sticky">
                        <th>Vehiculo</th>
                        <th>Tarifa</th>
                        <th>Valor</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($conTar as $row):?>
                        <tr>
                            <td style="display:none;"><?php echo $row['TarId'];?></td>    
                            <td><?php echo $row['TarVehiculo'];?></td>
                            <td><?php echo $row['TarTarifa'];?></td>
                            <td><?php echo $row['TarValor'];?></td>
                            <td><a href="#" class="btn-editTar" data-id="<?php $ediTar = editarTar($con, $row['TarId']);?>"><i class="fa-solid fa-pen-to-square"></i></a></td>                            
                            <td><a href="../../controller/RolAdmin/sql_queries.php?TarId=<?php echo $row['TarId'];?>"onclick="return confirm ('Desea eliminar la tarifa <?php echo $row['TarVehiculo'].' '.$row['TarTarifa'].' '.$row['TarValor'] ;?>')" class="btn-delete"><i class="fa-solid fa-trash"></i></a></td>
                        </tr>                       
                    <?php endforeach;?>
                </tbody> 
            </table>
        </div>
        <!-- fin tabla -->
        <!-- inicio boton agregar -->
        <div>
            <a href="#" id="btnAge" class="btn-ageTar">AGREGAR</a>  <!-- la clase se usa para el .js abrir modal  -->
        </div>
        <!-- fin boton agregar -->   
    </div>
    <?php
        include 'modalRegTar.php';
        include 'modalEdiTar.php';    
    ?>
    <!-- javascript -->
    <script src="../../js/modal.js"></script>
    <script src="../../js/menu.js"></script>   
</body>
    <!-- Fin body -->
</html>