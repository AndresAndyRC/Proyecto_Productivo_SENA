<?php
    include './model/conexion.php'; #conexion bd
    $con = conectar();
    #inicio de sesion
    session_start();
    #cierr de de sesion 
    if(isset($_GET['cerrar_sesion'])){
        session_unset();
        session_destroy();
    }
    #inicio segun rol
    if(isset($_SESSION['rol'])){
        switch($_SESSION['rol']){
            case 1: #rol admin
                header('location: ./view/RolAdmin/Admin.php');
            break;

            case 2: #rol supervisor
                header('location: ./view/RolSupervisor/Supervisor.php');
            break;

            case 3: #rol Operario
                header('location: ./view/RolOperario/Operario.php');
            break;  

            default:
        }
    }
    //if de autenticacion de usuario
    if(isset($_POST['usuario']) && isset($_POST['clave'])){
        //declaracion de variables 
        $usuario=$_POST['usuario'];
        $clave=$_POST['clave'];
        //sentencia sql
        $sql="SELECT * FROM usuarios WHERE UsuUsuario = :usuario AND UsuClave = :clave";
        //prepare statement
        $stmt = $con->prepare($sql);
        //bindParam para prevenir SQL injection
        $stmt->bindParam(':usuario', $usuario, PDO::PARAM_STR);
        $stmt->bindParam(':clave', $clave, PDO::PARAM_STR);
        //ejecutar la consulta
        $stmt->execute();
        //fetch
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if($row == true){
            //validar rol
            $rol = $row['UsuRol'];
            $_SESSION['rol'] = $rol;
            switch($_SESSION['rol']){
                case 1: #rol admin
                        header('location: ./view/RolAdmin/Admin.php');
                break;
    
                case 2: #rol supervisor
                        header('location: ./view/RolSupervisor/Supervisor.php');
                break;
    
                case 3: #rol Operario
                        header('location: ./view/RolOperario/Operario.php');
                break;  
    
                default:
            }
        }else{//no existe el ususario
            echo "<script>alert('Contraseña o ususario incorrectos');</script>";
        }
    }

