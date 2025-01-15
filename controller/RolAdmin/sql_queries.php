<?php
    include '../../model/conexion.php';
    $con = conectar(); //funcion conectar
    extract($_REQUEST); //extrae los campos post de los formularios

    //->Funcion consultar roles

    function consultaroles($con){
        $sql = "SELECT * FROM roles"; //consulta SQL para obtener los datos de la tabla roles
        $stmt = $con->prepare($sql); //preparar la consulta SQL
        $stmt->execute(); //ejecutar la consulta SQL
        $roles = $stmt->fetchAll(PDO::FETCH_ASSOC); //obtener todos los resultados de la consulta
        return $roles; // variable return
    }
    
    ///////////////////////////Supervisores

    //->Funcion consultar supervisores 

    function consultarSup ($con){
        $sql = "SELECT r.*, u.* FROM `roles` r JOIN `usuarios` u ON u.UsuRol = r.RolId WHERE u.UsuRol = 2 AND r.RolRol = 'Supervisor'"; //sentencia sql
        $stmt = $con->prepare($sql); //preparacion consulta
        $stmt->execute(); //ejecución consulta
        $conSup = $stmt->fetchAll(PDO::FETCH_ASSOC); //recuperacion consulta
        return $conSup; // variable return
    }

    //->Funcion registrar supervisor

    function registrarSup($con, $usuario, $clave){
        $sql = "INSERT INTO `usuarios` (`UsuUsuario`, `UsuClave`, `UsuRol`) VALUES (:UsuUsuario, :UsuClave, 2)"; //sentencia sql

        $regSup = $con->prepare($sql); //preparacion consulta
        $regSup-> bindParam(':UsuUsuario', $usuario); //dato para la sentencia sql
        $regSup-> bindParam(':UsuClave', $clave); //dato para la sentencia sql

        if($regSup->execute()){ //redirecciona a la pagina 
            header("location: ../../view/RolAdmin/Supervisores.php");   
        } else { 
            echo "<script>alert('Error en el registro del usuario');</script>";
        }    
    }
    // llamar función para registrar supervisor a traves del name del boton del formulario 
    if (isset($_POST['RegSup'])) {
        registrarSup($con, $_POST['UsuUsuario'], $_POST['UsuClave']); //envia los datos a la funcion 
    }

    //->Funcion editar supervisor
    
    function editarSup($con, $supId){
        $sql = "SELECT * FROM `usuarios` WHERE UsuId = :UsuId"; //sentencia sql
        $ediS = $con->prepare($sql); //preparacion consulta 
        $ediS-> bindParam(':UsuId',$supId); //dato para la sentencia sql
        $ediS->execute(); //ejecución consulta
        $ediSup = $ediS->fetchAll(PDO::FETCH_ASSOC); //recuperacion consulta
        return $ediSup; // variable return

    }
    $supId = 0;

    if(isset($_GET['btn-edit'])){  
        $supId = $_GET['supId']; 
        echo $supId;
        editarSup($con, $supId);
    } 

    //->Funcion actualizar supervisor

    function actualizarSup ($con, $IdSup, $UsuSup, $ClaSup, $RolSup){
        $sql = "UPDATE `usuarios` SET `UsuUsuario`= :usuario , `UsuClave` = :clave , `UsuRol` = :rol WHERE UsuId = :id"; //sentencia sql
        $actSup = $con->prepare($sql); //preparacion consulta
        $actSup->bindParam(':id', $IdSup); //dato para la sentencia sql
        $actSup->bindParam(':usuario', $UsuSup); //dato para la sentencia sql
        $actSup->bindParam(':clave', $ClaSup); //dato para la sentencia sql
        $actSup->bindParam(':rol', $RolSup); //dato para la sentencia sql

        if($actSup->execute()){ //redirecciona a la pagina 
            header("location: ../../view/RolAdmin/Supervisores.php");   
        } else { 
            echo "<script>alert('Error la actualizacion del usuario');</script>";
        }
    }

    //llamar función para actualizar supervisor a traves del name del boton del formulario 
    if (isset($_POST['EdiSup'])) {
        actualizarSup($con, $_POST['UsuId'], $_POST['UsuUsuario'], $_POST['UsuClave'], $_POST['UsuRol']); //envia los datos a la funcion 
    }

    //->Funcion eliminar supervisor

    function eliminarSup($con, $eliminarSup){
        $sql = "DELETE FROM `usuarios` WHERE UsuId = :UsuId"; //sentencia sql
        $eliSup = $con->prepare($sql); //preparacion consulta
        $eliSup-> bindParam(':UsuId',$eliminarSup); //dato para la sentencia sql

        if($eliSup->execute()){ //redirecciona a la pagina 
            header("location: ../../view/RolAdmin/Supervisores.php");   
        } else { 
            echo "<script>alert('Error en la eliminacion del usuario');</script>";
        } 
    }

    if (isset($_GET['UsuId'])){
        $eliminarSup = $_GET['UsuId'];
        eliminarSup ($con, $eliminarSup);
    }

    ///////////////////////////Operarios

    //->Funcion consultar operarios 

    function consultarOpe ($con){
        $sql = "SELECT r.*, u.* FROM `roles` r JOIN `usuarios` u ON u.UsuRol = r.RolId WHERE u.UsuRol = 3 AND r.RolRol = 'Operario'"; //sentencia sql
        $stmt = $con->prepare($sql); //preparacion consulta
        $stmt->execute(); //ejecución consulta
        $conOpe = $stmt->fetchAll(PDO::FETCH_ASSOC); //recuperacion consulta
        return $conOpe; // variable return
    }

    //->Funcion registrar Operario

    function registrarOpe($con, $usuario, $clave){
        $sql = "INSERT INTO `usuarios` (`UsuUsuario`, `UsuClave`, `UsuRol`) VALUES (:UsuUsuarioOpe, :UsuClaveOpe, 3)"; //sentencia sql

        $regOpe = $con->prepare($sql); //preparacion consulta
        $regOpe-> bindParam(':UsuUsuarioOpe', $usuario); //dato para la sentencia sql
        $regOpe-> bindParam(':UsuClaveOpe', $clave); //dato para la sentencia sql

        if($regOpe->execute()){ //redirecciona a la pagina 
            header("location: ../../view/RolAdmin/Operarios.php");   
        } else { 
            echo "<script>alert('Error en el registro del usuario');</script>";
        }    
    }
    //llamar función para registrar Operario a traves del name del boton del formulario 
    if (isset($_POST['RegOpe'])) {
        registrarOpe($con, $_POST['UsuUsuarioOpe'], $_POST['UsuClaveOpe']); //envia los datos a la funcion 
    }

    //-> Funcion editar operarios

    function editarOpe($con, $opeId){
        $sql = "SELECT * FROM `usuarios` WHERE UsuId = :UsuId"; //sentencia sql
        $ediO = $con->prepare($sql); //preparacion consulta
        $ediO-> bindParam(':UsuId',$opeId); //dato para la sentencia sql
        $ediO->execute(); //ejecución consulta
        $ediOpe = $ediO->fetchAll(PDO::FETCH_ASSOC); //recuperacion consulta
        return $ediOpe; // variable return

    }
    $opeId = 0;

    if(isset($_GET['btn-editOpe'])){  
        $opeId = $_GET['opeId']; 
        editarOpe($con, $opeId);
    } 

    //->Funcion actualizar Operario

    function actualizarOpe ($con, $IdOpe, $UsuOpe, $ClaOpe, $RolOpe){
        $sql = "UPDATE `usuarios` SET `UsuUsuario`= :usuario , `UsuClave` = :clave , `UsuRol` = :rol WHERE UsuId = :id"; //sentencia sql
        $actOpe = $con->prepare($sql); //preparacion consulta
        $actOpe->bindParam(':id', $IdOpe); //dato para la sentencia sql
        $actOpe->bindParam(':usuario', $UsuOpe); //dato para la sentencia sql
        $actOpe->bindParam(':clave', $ClaOpe); //dato para la sentencia sql
        $actOpe->bindParam(':rol', $RolOpe); //dato para la sentencia sql

        if($actOpe->execute()){ //redirecciona a la pagina 
            header("location: ../../view/RolAdmin/Operarios.php");   
        } else { 
            echo "<script>alert('Error la actualizacion del usuario');</script>";
        }
    }

    //llamar función para actualizar Operario a traves del name del boton del formulario 
    if (isset($_POST['EdiOpe'])) {
        actualizarOpe($con, $_POST['UsuId'], $_POST['UsuUsuario'], $_POST['UsuClave'], $_POST['UsuRol']); //envia los datos a la funcion 
    }

    //->Funcion eliminar Operario

    function eliminarOpe($con, $eliminarOpe){
        $sql = "DELETE FROM `usuarios` WHERE UsuId = :UsuId"; //sentencia sql
        $eliOpe = $con->prepare($sql); //preparacion consulta
        $eliOpe-> bindParam(':UsuId',$eliminarOpe); //dato para la sentencia sql

        if($eliOpe->execute()){ //redirecciona a la pagina 
            header("location: ../../view/RolAdmin/Operarios.php");   
        } else { 
            echo "<script>alert('Error en la eliminacion del usuario');</script>";
        } 
    }

    if (isset($_GET['UsuIdOpe'])){
        $eliminarOpe = $_GET['UsuIdOpe'];
        eliminarOpe ($con, $eliminarOpe);
    }

    ///////////////////////////Tarifas

//->Funcion consultar Tarifas 

function consultarTar ($con){
    $sql = "SELECT * FROM `tarifas`"; //sentencia sql
    $stmt = $con->prepare($sql); //preparacion consulta
    $stmt->execute(); //ejecución consulta
    $conTar = $stmt->fetchAll(PDO::FETCH_ASSOC); //recuperacion consulta
    return $conTar; // variable return
}

//->Funcion registrar tarifa

function registrarTar($con, $Tvehiculo, $Ttarifa, $Tvalor){
    $sql = "INSERT INTO `tarifas` (`TarVehiculo`, `TarTarifa`, `TarValor`) VALUES (:TarVehiculo, :TarTarifa, :TarValor)"; //sentencia sql

    $regTar = $con->prepare($sql); //preparacion consulta
    $regTar-> bindParam(':TarVehiculo', $Tvehiculo); //dato para la sentencia sql
    $regTar-> bindParam(':TarTarifa', $Ttarifa); //dato para la sentencia sql
    $regTar-> bindParam(':TarValor', $Tvalor); //dato para la sentencia sql

    if($regTar->execute()){ //redirecciona a la pagina 
        header("location: ../../view/RolAdmin/Tarifas.php");   
    } else { 
        echo "<script>alert('Error en el registro de la tarifa');</script>";
    }    
}
//llamar función para registrar tarifa a traves del name del boton del formulario 
if (isset($_POST['RegTar'])) {
    registrarTar($con, $_POST['TarVehiculo'], $_POST['TarTarifa'], $_POST['TarValor']); //envia los datos a la funcion 
}

//-> Funcion editar Tarifas

function editarTar($con, $TarId){
    $sql = "SELECT * FROM tarifas WHERE TarId = :TarId"; //sentencia sql
    $ediT = $con->prepare($sql); //preparacion consulta
    $ediT-> bindParam(':TarId',$TarId); //dato para la sentencia sql
    $ediT->execute(); //ejecución consulta
    $ediTar = $ediT->fetchAll(PDO::FETCH_ASSOC); //recuperacion consulta
    return $ediTar; // variable return
}

$TarId = 0;

if(isset($_GET['btn-editTar'])){  
    $TarId = $_GET['TarId']; 
    editarTar($con, $TarId);
} 

//->Funcion actualizar tarifa

function actualizarTar ($con, $IdTar, $VehTar, $TarTar, $ValTar){
    $sql = "UPDATE `tarifas` SET `TarVehiculo`= :vehiculo , `TarTarifa` = :tarifa , `TarValor` = :valor WHERE TarId = :id"; //sentencia sql
    $actTar = $con->prepare($sql); //preparacion consulta
    $actTar->bindParam(':id', $IdTar); //dato para la sentencia sql
    $actTar->bindParam(':vehiculo',$VehTar); //dato para la sentencia sql
    $actTar->bindParam(':tarifa', $TarTar); //dato para la sentencia sql
    $actTar->bindParam(':valor', $ValTar); //dato para la sentencia sql

    if($actTar->execute()){ //redirecciona a la pagina 
        header("location: ../../view/RolAdmin/Tarifas.php");   
    } else { 
        echo "<script>alert('Error en la actualizacion de la tarifa');</script>";
    }
}

//llamar función para actualizar tarifa a traves del name del boton del formulario 
if (isset($_POST['EdiTar'])) {
    actualizarTar($con, $_POST['TarId'], $_POST['TarVehiculo'], $_POST['TarTarifa'], $_POST['TarValor']); //envia los datos a la funcion 
}

//->Funcion eliminar tarifa

function eliminarTar($con, $eliminarTar){
    $sql = "DELETE FROM `tarifas` WHERE TarId = :TarId"; //sentencia sql
    $eliTar = $con->prepare($sql); //preparacion consulta
    $eliTar-> bindParam(':TarId',$eliminarTar); //dato para la sentencia sql

    if($eliTar->execute()){ //redirecciona a la pagina 
        header("location: ../../view/RolAdmin/Tarifas.php");   
    } else { 
        echo "<script>alert('Error en la eliminacion de la ratifa');</script>";
    } 
}

if (isset($_GET['TarId'])){
    $eliminarTar = $_GET['TarId'];
    eliminarTar ($con, $eliminarTar);
}

///////Pagos

//->Funcion consulta de pagos para tabla 

function consultarPagos($con){
    $sql = "SELECT * FROM pagos"; //consulta SQL para obtener los datos de la tabla roles
    $stmt = $con->prepare($sql); //preparar la consulta SQL
    $stmt->execute(); //ejecutar la consulta SQL
    $Pagos = $stmt->fetchAll(PDO::FETCH_ASSOC); //obtener todos los resultados de la consulta
    return $Pagos; // variable return
}

//-> Funcion Recibo ingreso

function reciboPago($con, $PagID){
    $sql = "SELECT * FROM pagos WHERE PagId = :PagId"; //sentencia sql
    $recibo = $con->prepare($sql); //preparacion consulta
    $recibo-> bindParam(':PagId', $PagID); //dato para la sentencia sql
    $recibo->execute(); //ejecución consulta
    $ImpPag = $recibo->fetchAll(PDO::FETCH_ASSOC); //recuperacion consulta
    return $ImpPag; // variable returMen
}

$PagID = 0;

if (isset($_GET['btn-ImpPag'])){  
    $PagID = $_GET['PagId']; 
    reciboPago($con, $PagID);
} 

//funcion consultar pagos por fechas para exportar 
function consultarExportar($con, $inicio, $fin){
    $sql = "SELECT * FROM pagos WHERE PagHoraEnt >= :inicio AND PagHoraEnt <= :fin"; //sentencia  sql
    $exp = $con->prepare($sql); //preparacion de la consulta 
    $exp->bindParam(':inicio', $inicio); //datos para sentencia sql
    $exp->bindParam(':fin', $fin); //datos para sentencia sql
    $exp->execute(); //ejecución consulta
    $exportar = $exp->fetchAll(PDO::FETCH_ASSOC); //recuperacion consulta
    return $exportar; // variable returMen
}

