<!-- inicio modal -->
<div class="fonModal-Exp">
    <div class="modal-Exp modalX-Exp">
        <p class="cerrar-Exp"><i class="fa-regular fa-circle-xmark"></i></p> <!-- para cerrar -->
        <form action="../../controller/RolSupervisor/Pagos.php" method="post" id="form">
            <div class="form">
                <h2>Consultar Por Fecha</h2>
                <div class="grupo">
                    <label for="">Fecha inicial</label><br>
                    <input type="date" name="FechaInicio" required><span class="barra"></span>
                </div>
                <div class="grupo">
                    <label for="">Fecha final</label><br>
                    <input type="date" name="FechaFin" required><span class="barra"></span>
                </div>
                <button type="submit" name="RegExp">Exportar</button>
            </div>
        </form>           
    </div>
</div>
<!-- fin modal -->