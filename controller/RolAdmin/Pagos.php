<?php
    header("Content-Type: application/xls");
    header("Content-Disposition: attachment; filename= Pagos.xls");
    include 'session_start.php';
    include 'sql_queries.php';  
    $con = conectar(); //funcion de conectar a bd
    $inicio = $_POST['FechaInicio'];
    $fin = $_POST['FechaFin'];
    $Pagos = consultarExportar($con, $inicio, $fin); // funcion de consultar sup para tabla  
?>
            <table id="table-pag">
                <thead>
                <tr class="sticky">
                        <th>Placa</th>
                        <th>Entrada</th>
                        <th>Salida</th>
                        <th>Vehiculo</th>
                        <th>Tarifa</th>
                        <th>Valor</th>                        
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
                        </tr>                       
                    <?php endforeach;?>
                </tbody> 
            </table>
        