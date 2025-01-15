<!-- inicio modal -->
<div class="pantallaPag">
    <div class="m-abierto-Pag m-cerrado-Pag" id="modalEdiPag">
        <p class="i-cerrar-Pag"><i class="fa-regular fa-circle-xmark"></i></p> <!-- para cerrar -->
        <form action="../../controller/RolOperario/sql_queries.php" method="post" id="form">
            <div class="form">
                <h2>Pagar</h2>
                <div class="grupo">
                    <label for="">Placa</label><br>
                    <input type="text" name="PagPlaca" id="PagPlaca" maxlength="6" value="<?php echo $Pago [0] ['VehPlaca']; ?>" readonly required><span class="barra"></span>
                </div>
                <div class="grupo">
                    <label for="">Hora Entrada</label><br>
                    <input type="text" name="PagHoraEnt" id="PagHoraEnt" maxlength="6" value="<?php echo $Pago [0] ['VehHoraEntrada']; ?>" readonly required><span class="barra"></span>
                </div>
                <div class="grupo">
                <label for="">Vehiculo</label><br>
                    <select name="PagTipoVeh" id="PagTipoVeh" require><span class="barra"></span>
                        <option value="<?php echo $Pago [0] ['VehTipo']; ?>"><?php echo $Pago [0] ['VehTipo']; ?></option>
                        <option value="Automovil">Automovil</option>
                        <option value="Moto">Moto</option>
                        <option value="Bicicleta">Bicicleta</option>
                    </select>    
                </div>
                <div class="grupo">
                    <label for="">Hora Salida</label><br>
                    <input type="datetime" name="PagHoraSalida" id="PagHoraSalida" value="<?= $horalocal?>" readonly required><span class="barra"></span>
                </div>
                <div class="grupo">
                    <label for="">Tarifa</label><br>
                    <select name="PagTarifa" id="PagTarifa" require><span class="barra"></span>
                        <option value="">Seleccione</option>
                        <option value="Dia">Dia</option>
                        <option value="Minuto">Minuto</option>
                        
                    </select>    
                </div>
                
                <button type="submit" name="Pagar">Pagar</button>
            </div> 
        </form>           
    </div>
</div>