<!-- inicio modal -->
<div class="modal-container">
    <div class="modal modal-close">
        <p class="cerrar"><i class="fa-regular fa-circle-xmark"></i></p> <!-- para cerrar -->
        <form action="../../controller/RolAdmin/sql_queries.php" method="post" id="form">
            <div class="form">
                <h2>Registrar Supervisor</h2>
                <div class="grupo">
                    <input type="text" name="UsuUsuario" required><span class="barra"></span>
                    <label for="">Nombre Usuario</label>
                </div>
                <div class="grupo">
                    <input type="password" name="UsuClave" required><span class="barra"></span>
                    <label for="">Clave</label>
                </div>
                <button type="submit" name="RegSup">Registrar</button>
            </div>
        </form>           
    </div>
</div>
<!-- fin modal -->