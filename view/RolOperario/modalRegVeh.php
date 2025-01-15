<!-- inicio modal -->
<div class="fonModal-Veh">
    <div class="modal-Veh modalX-Veh">
        <p class="cerrar-Veh"><i class="fa-regular fa-circle-xmark"></i></p> <!-- para cerrar -->
        <form action="../../controller/RolOperario/sql_queries.php" method="post" id="form">
            <div class="form">
                <h2>Registrar Vehiculo</h2>
                <div class="grupo">
                    <input type="text" name="VehPlaca" maxlength="6" required><span class="barra"></span>
                    <label for="">Placa</label>
                </div>
                <div class="grupo">
                <label for="">Vehiculo</label><br>
                    <select name="VehVehiculo" require><span class="barra"></span>
                        <option value="">Seleccione</option>
                        <option value="Automovil">Automovil</option>
                        <option value="Moto">Moto</option>
                        <option value="Bicicleta">Bicicleta</option>
                    </select>    
                </div>
                <div class="grupo">
                    <input type="text" name="VehModelo" maxlength="6" required><span class="barra"></span>
                    <label for="">Modelo</label>
                </div>
                <div class="grupo">
                    <input type="text" name="VehColor" maxlength="6" required><span class="barra"></span>
                    <label for="">Color</label>
                </div>
                <div class="grupo">
                    <input type="datetime" name="VehFecha_Ini" value="<?= $horalocal?>" required><span class="barra"></span>
                    <label for="">Fecha de Inicio</label>
                </div>
                <button type="submit" name="RegVeh" onclick="return confirm ('Recuerda que no puedes modificar los datos después realizar el registro.\nPor ello confirmalos.')">Registrar</button>
            </div>
        </form>           
    </div>
</div>
<!-- fin modal -->