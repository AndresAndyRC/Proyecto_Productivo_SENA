<!-- inicio modal -->
<div class="pantallaMen">
    <div class="m-abierto-Men m-cerrado-Men" id="modalEdiMen">
        <p class="i-cerrar-Men"><i class="fa-regular fa-circle-xmark"></i></p> <!-- para cerrar -->
        <form action="../../controller/RolSupervisor/sql_queries.php" method="post" id="form">
            <div class="form">
                <h2>Registrar Mensualidad</h2>
                <input type="text" name="MenId" id="MenId" value="<?php echo $ediMen[1] ['MenId']; ?>" style="display: none;">
                <div class="grupo">
                    <input type="text" name="MenPlaca" id="MenPlaca" maxlength="6" value="<?php echo $ediMen[1] ['MenPlaca']; ?>"required><span class="barra"></span>
                    <label for="">Placa</label>
                </div>
                <div class="grupo">
                <label for="">Vehiculo</label><br>
                    <select name="MenVehiculo" id="MenVehiculo" require><span class="barra"></span>
                        <option value="">Seleccione</option>
                        <option value="Automovil">Automovil</option>
                        <option value="Moto">Moto</option>
                        <option value="Bicicleta">Bicicleta</option>
                    </select>    
                </div>
                <div class="grupo">
                    <label for="">Meses</label><br>
                    <select name="MenDias" id="MenDias" require><span class="barra"></span>
                        <option value="">Seleccione</option>
                        <option value="30">1 Mes</option>
                        <option value="60">2 Mes</option>
                        <option value="90">3 Mes</option>
                    </select>    
                </div>
                <div class="grupo">
                    <input type="date" name="MenFecha_Ini" id="MenFecha_Ini" value="<?php echo $ediMen[1] ['MenFecha_Ini']; ?>" required><span class="barra"></span>
                    <label for="">Fecha de Inicio</label>
                </div>
                <button type="submit" name="EdiMen">Registrar</button>
            </div> 
        </form>           
    </div>
</div>