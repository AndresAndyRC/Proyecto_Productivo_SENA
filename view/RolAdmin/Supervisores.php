<?php
    include '../../controller/RolAdmin/session_start.php';
    include 'head.php';
    include '../../controller/RolAdmin/sql_queries.php';
    $con = conectar(); //funcion de conectar a bd
    $conSup = consultarSup($con); // funcion de consultar sup para tabla
    $rol = consultaroles($con)  
     
?>
    <!-- contenido pagina -->
    <div class="content">
        <h1>Registro de Supervisores</h1>
        <!-- tabla -->
        <div class="tabla">
            <!-- inicio tabla  -->
            <table>
                <thead>
                    <tr class="sticky">
                        <th>Nombre Usuario</th>
                        <th>Clave</th>
                        <th>Rol</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($conSup as $row):?>
                        <tr>
                            <td style="display:none;"><?php echo $row['UsuId'];?></td>    
                            <td><?php echo $row['UsuUsuario'];?></td>
                            <td><?php echo $row['UsuClave'];?></td>
                            <td><?php echo $row['RolRol'];?></td>
                            <td><a href="#" class="btn-edit" id="btnEdit" data-id="<?php $ediSup = editarSup($con, $row['UsuId']);?>"><i class="fa-solid fa-pen-to-square"></i></a></td>                            
                            <td><a href="../../controller/RolAdmin/sql_queries.php?UsuId=<?php echo $row['UsuId'];?>"onclick="return confirm ('Desea eliminar el usuario de <?php echo $row['UsuUsuario'];?>.')" class="btn-delete"><i class="fa-solid fa-trash"></i></a></td>
                        </tr>
                    <?php endforeach;?>
                </tbody> 
            </table>
        </div>
        <!-- fin tabla -->
        <!-- inicio boton agregar -->
        <div>
            <a href="#" id="btnAge" class="btn-tb">AGREGAR</a>  <!-- la clase se usa para el .js abrir modal  -->
        </div>
        <!-- fin boton agregar -->   
    </div>
    <?php
        include 'modalRegSup.php';
        include 'modalEdiSup.php';    
    ?>
    <!-- javascript -->
    <script src="../../js/modal.js"></script>
    <script src="../../js/menu.js"></script>   
</body>
    <!-- Fin body -->
</html>