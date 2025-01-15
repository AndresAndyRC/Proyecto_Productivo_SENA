<!-- inicio modal -->
<div class="fonModal-Ope">
    <div class="modal-Ope modalX-Ope">
        <p class="cerrar-Ope"><i class="fa-regular fa-circle-xmark"></i></p> <!-- para cerrar -->
        <form action="../../controller/RolAdmin/sql_queries.php" method="post" id="form">
            <div class="form">
                <h2>Registrar Operarios</h2>
                <div class="grupo">
                    <input type="text" name="UsuUsuarioOpe" required><span class="barra"></span>
                    <label for="">Nombre Usuario</label>
                </div>
                <div class="grupo">
                    <input type="password" name="UsuClaveOpe" required><span class="barra"></span>
                    <label for="">Clave</label>
                </div>
                <button type="submit" name="RegOpe">Registrar</button>
            </div>
        </form>           
    </div>
</div>
<!-- fin modal -->