<!-- inicio modal -->
<div class="pantallaVeh">
    <div class="m-abierto-Veh m-cerrado-Veh" id="ReciboIngreso">
        <p class="i-cerrar-Veh no-imprimir"><i class="fa-regular fa-circle-xmark"></i></p> <!-- para cerrar -->
        <!--action="../../controller/RolOperario/sql_queries.php"-->
        <form  method="post" id="form">
            <div class="form">
                <h4>TICKET DE INGRESO</h4>
                <div class="grupo0">
                    <p>READY CAR PARK<br>DIRECCION:<br>NIT: #########-#</p>
                </div>
                <h4>Informacion del Vehiculo</h4>
                <div class="grupo1">
                    <p>Placa: <input type="text" id="VehTipo" value=" <?php echo $ImpIng [0] ['VehTipo'];?>" require readonly><span class="barra"></span></p>
                </div>
                <div class="grupo1">
                    <p>Tipo Vehiculo: <input type="text" id="VehPlaca" value="<?php echo $ImpIng [0] ['VehPlaca'];?>" require readonly><span class="barra"></span></p>
                </div>
                <div class="grupo1">
                    <p>Modelo: <input type="text" id="VehModelo" value="<?php echo $ImpIng [0] ['VehModelo'];?>" require readonly><span class="barra"></span></p>
                </div>
                <div class="grupo1">
                    <p>Color: <input type="text" id="VehColor" value="<?php echo $ImpIng [0] ['VehColor'];?>" readonly><span class="barra"></span></p>
                </div>
                <div class="grupo1">
                    <p>Hora de Ingreso: <input type="text" id="VehHoraEntrada" value="<?php echo $ImpIng [0] ['VehHoraEntrada'];?>" readonly><span class="barra"></span></p>
                </div>
                <div class="grupo2">
                    <p>Recuerda que la perdida del ticket tiene un costo de 5000COP
                    <br>Horario de Atencion 6:00AM - 9:00PM
                    </p>
                </div>
                <button class="no-imprimir" onclick="imprimir1()">Imprimir</button>
            </div>
        </form>           
    </div>
</div>
<!-- fin modal -->