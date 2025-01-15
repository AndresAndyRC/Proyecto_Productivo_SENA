<!-- inicio modal -->
<div class="fonModal-Men">
    <div class="modal-Men modalX-Men">
        <p class="cerrar-Men"><i class="fa-regular fa-circle-xmark"></i></p> <!-- para cerrar -->
        <form action="../../controller/RolSupervisor/sql_queries.php" method="post" id="form">
            <div class="form">
                <h2>Registrar Vehiculo</h2>
                <div class="grupo">
                    <input type="text" name="MenPlaca" maxlength="6" required><span class="barra"></span>
                    <label for=""> Placa</label>
                </div>
                <div class="grupo">
                <label for="">Vehiculo</label><br>
                    <select name="MenVehiculo" require><span class="barra"></span>
                        <option value="">Seleccione</option>
                        <option value="Automovil">Automovil</option>
                        <option value="Moto">Moto</option>
                        <option value="Bicicleta">Bicicleta</option>
                    </select>    
                </div>
                <div class="grupo">
                    <label for="">Meses</label><br>
                    <select name="MenDias" require><span class="barra"></span>
                        <option value="">Seleccione</option>
                        <option value="30">1 Mes</option>
                        <option value="60">2 Mes</option>
                        <option value="90">3 Mes</option>
                    </select>    
                </div>
                <div class="grupo">
                    <input type="date" name="MenFecha_Ini" value="<?= $horalocal?>" required><span class="barra"></span>
                    <label for="">Fecha de Inicio</label>
                </div>
                <button type="submit" name="RegMen">Registrar</button>
            </div>
        </form>           
    </div>
</div>
<!-- fin modal -->