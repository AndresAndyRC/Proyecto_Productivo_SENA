<!-- inicio modal -->
<div class="pantallaPago">
    <div class="m-abierto-Pago m-cerrado-Pago" id="ReciboPago">
        <p class="i-cerrar-Pago no-imprimir"><i class="fa-regular fa-circle-xmark"></i></p> <!-- para cerrar -->
        <!--action="../../controller/RolOperario/sql_queries.php"-->
        <form  method="post" id="form">
            <div class="form">
                <h4>TICKET DE PAGO</h4>
                <div class="grupo0">
                    <p>READY CAR PARK<br>DIRECCION:<br>NIT: #########-#</p>
                </div>
                <h4>Informacion del Vehiculo</h4>
                <div class="grupo1">
                    <p>Placa: <input type="text" id="PagPlaca" value=" <?php echo $ImpPag [0] ['PagPlaca'];?>" require readonly><span class="barra"></span></p>
                </div>
                <div class="grupo1">
                    <p>Hora de Ingreso: <input type="text" id="PagHoraEnt" value="<?php echo $ImpPag [0] ['PagHoraEnt'];?>" readonly><span class="barra"></span></p>
                </div>
                <div class="grupo1">
                    <p>Hora de Salida: <input type="text" id="PagHoraSalir" value="<?php echo $ImpPag [0] ['PagHoraSalir'];?>" readonly><span class="barra"></span></p>
                </div>
                <div class="grupo1">
                    <p>Tipo Vehiculo: <input type="text" id="PagTipoVeh" value="<?php echo $ImpPag [0] ['PagTipoVeh'];?>" require readonly><span class="barra"></span></p>
                </div>
                <div class="grupo1">
                    <p>Tarifa: <input type="text" id="PagTarifa" value="<?php echo $ImpPag [0] ['PagTarifa'];?>" require readonly><span class="barra"></span></p>
                </div>
                <div class="grupo1">
                    <p><strong>VALOR A PAGAR: </strong><input type="text" id="PagValor" value="<?php echo $ImpPag [0] ['PagValor'];?>" readonly><span class="barra"></span></p>
                </div>
                
                <div class="grupo2">
                    <p>Gracias por usar nuerstro servicio de parqueaderos regresa pronto
                    <br>Horario de Atencion 6:00AM - 9:00PM
                    </p>
                </div>
                <button class="no-imprimir" onclick="imprimir()">Imprimir</button>
            </div>
        </form>           
    </div>
</div>
<!-- fin modal -->