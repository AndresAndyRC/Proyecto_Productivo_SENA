<!-- inicio modal -->
<div class="pantallaTar">
    <div class="m-abierto-Tar m-cerrado-Tar" id="modalEdiTar">
        <p class="i-cerrar-Tar"><i class="fa-regular fa-circle-xmark"></i></p> <!-- para cerrar -->
        <form action="../../controller/RolAdmin/sql_queries.php" method="post" id="form">
            <div class="form">
                <h2>Registrar Tarifa</h2>
                <div class="grupo">
                    <input type="text" name="TarId" id="TarId" value="<?php echo $ediTar[1] ['TarId']; ?>" style="display: none;">
                    <label for="">Vehiculo</label><br>
                    <select name="TarVehiculo" id="TarVehiculo" require><span class="barra"></span>
                        <option value="">Seleccione</option>
                        <option value="Automovil">Automovil</option>
                        <option value="Moto">Moto</option>
                        <option value="Bicicleta">Bicicleta</option>
                    </select>    
                </div>
                <div class="grupo">
                    <label for="">Tarifa</label><br>
                    <select name="TarTarifa" id="TarTarifa" require><span class="barra"></span>
                        <option value="">Seleccione</option>
                        <option value="Minuto">Minuto</option>
                        <option value="Dia">Dia</option>
                        <option value="Mensualidad">Mensualidad</option>
                    </select>                    
                </div>
                <div class="grupo">
                    <input type="text" name="TarValor" id="TarValor" value="<?php echo $ediTar[1] ['TarValor']; ?>"required><span class="barra"></span>
                    <label for="">Valor</label>
                </div>
                <button type="submit" name="EdiTar">Registrar</button>
            </div>
        </form>           
    </div>
</div>
<!-- fin modal -Ope