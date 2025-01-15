<!-- inicio modal -->
<div class="pantallaOpe">
    <div class="m-abierto-Ope m-cerrado-Ope">
        <p class="i-cerrar-Ope"><i class="fa-regular fa-circle-xmark"></i></p> <!-- para cerrar -->
        <form action="../../controller/RolAdmin/sql_queries.php" method="post" id="form">
            <div class="form">
                <h2>Editar Supervisor</h2>
                <div class="grupo">
                <input type="text" name="UsuId" id="UsuId" value="<?php echo $ediOpe[1] ['UsuId']; ?>" style="display: none;">
                <input type="text" name="UsuUsuario" required id="UsuUsuario" value="<?php echo $ediOpe[1] ['UsuUsuario']; ?>"><span class="barra"></span>
                    <label for="">Nombre Usuario</label>
                </div>
                <div class="grupo">
                    <input type="text" name="UsuClave" required id="UsuClave" value="<?php echo $ediOpe[1] ['UsuClave']; ?>"><span class="barra"></span>
                    <label for="">Clave</label>
                </div>
                <div class="grupo">
                    <label for="">Rol</label><br>
                    <select name="UsuRol" id="UsuRol" required>
                        
                        <option value="">Seleccione</option>
                        <option value="2">Supervisor</option>
                        <option value="3">Operario</option>
                    </select>
                    
                </div>
                <button type="submit" name="EdiOpe">Registrar</button>
            </div>
        </form>           
    </div>
</div>
<!-- fin modal -Ope