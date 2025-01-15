<?php
    include '../../model/conexion.php';
    $con = conectar(); //funcion conectar

///////////////////////////Mensualidades

//->Funcion consultar Mensualidades

function consultarMen($con){
    $sql = "SELECT MenId, MenPlaca, MenVehiculo, MenValor, MenFecha_Ini, MenFecha_Fin,
            CASE WHEN MenFecha_Fin < CURDATE() THEN 'Vencido'
                 WHEN MenFecha_Ini <= CURDATE() AND MenFecha_Fin >= CURDATE() THEN 'Al día'
                 ELSE 'Pendiente'
            END AS MenEstado
            FROM mensualidades"; // actualizamos la sentencia SQL para incluir la consulta CASE
    $stmt = $con->prepare($sql);
    $stmt->execute();
    $conMen = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $conMen;
}


//->Funcio consultar valor mensualidad

function valorMensualidad($con, $Vehiculo, $Tarifa) {

    $sql = "SELECT TarValor FROM tarifas WHERE TarVehiculo = :TarVehiculo AND TarTarifa = :TarTarifa";
    $stmt = $con->prepare($sql); //preparacion consulta
    $stmt-> bindParam(':TarVehiculo', $Vehiculo); //dato para la sentencia sql
    $stmt-> bindParam(':TarTarifa', $Tarifa); //dato para la sentencia sql
    $stmt-> execute(); //ejecución consulta
    $Precio = $stmt->fetchAll(PDO::FETCH_ASSOC); //recuperacion consulta
    $Valor = $Precio[0]['TarValor']; //obtien el valor del array 
    return $Valor;
}

//->Funcion registar Mensualidad

function registrarMen($con, $Placa, $Vehiculo, $Valor, $Inicio, $Fin){
    $sql = "INSERT INTO `mensualidades` (`MenPlaca`, `MenVehiculo`, `MenValor`, `MenFecha_Ini`, `MenFecha_Fin`) VALUES (:MenPlaca, :MenVehiculo, :MenValor, :MenFecha_Ini, :MenFecha_Fin)"; //sentencia sql

    $regMen = $con->prepare($sql); //preparacion consulta
    $regMen-> bindParam(':MenPlaca', $Placa); //dato para la sentencia sql
    $regMen-> bindParam(':MenVehiculo', $Vehiculo); //dato para la sentencia sql
    $regMen-> bindParam(':MenValor', $Valor); //dato para la sentencia sql
    $regMen-> bindParam(':MenFecha_Ini', $Inicio); //dato para la sentencia sql
    $regMen-> bindParam(':MenFecha_Fin', $Fin); //dato para la sentencia sql

    if($regMen->execute()){ //redirecciona a la pagina 
        header("location: ../../view/RolSupervisor/Mensualidades.php");   
    } else { 
        echo "Error en el registro de la mensualidad";
    }    
}
//llamar función para registrar tarifa a traves del name del boton del formulario 
if (isset($_POST['RegMen'])) {
    $placa = strtoupper($_POST['MenPlaca']);// convierte a mayusculas 
    // captura de varibles para el valor
    $Vehiculo = $_POST['MenVehiculo'];
    $Tarifa = "Mensualidad";
    // calcular valor
    $Valor = valorMensualidad($con, $Vehiculo, $Tarifa);
    // captura de datos para la fecha fin 
    $dias = $_POST['MenDias']; 
    $fechaIni = $_POST['MenFecha_Ini'];
    //calculo fecha
    $fechaFin = date('Y-m-d', strtotime($fechaIni . '+' . $dias .'days')); //sumar dias
    registrarMen($con, $placa, $Vehiculo, $Valor, $fechaIni, $fechaFin); //envia los datos a la funcion 
}

//-> Funcion editar Mensualidades

function editarMen($con, $MenId){
    $sql = "SELECT * FROM mensualidades WHERE MenId = :MenId"; //sentencia sql
    $ediM = $con->prepare($sql); //preparacion consulta
    $ediM-> bindParam(':MenId', $MenId); //dato para la sentencia sql
    $ediM->execute(); //ejecución consulta
    $ediMen = $ediM->fetchAll(PDO::FETCH_ASSOC); //recuperacion consulta
    return $ediMen; // variable returMen
}

$MenId = 0;

if(isset($_GET['btn-editMen'])){  
    $MenId = $_GET['MenId']; 
    editarMen($con, $MenId);
} 

//->Funcion actualizar Mensualidad

function actualizarMen($con, $Id, $Placa, $Vehiculo, $Valor, $Inicio, $Fin){
    $sql = "UPDATE `mensualidades` SET `MenPlaca` = :MenPlaca, `MenVehiculo` = :MenVehiculo, `MenValor` = :MenValor, `MenFecha_Ini` = :MenFecha_Ini, `MenFecha_Fin` = :MenFecha_Fin WHERE MenId = :MenId"; //sentencia sql
    
    $ActMen = $con->prepare($sql); //preparacion consulta
    $ActMen-> bindParam(':MenId', $Id); //dato para la sentencia sql
    $ActMen-> bindParam(':MenPlaca', $Placa); //dato para la sentencia sql
    $ActMen-> bindParam(':MenVehiculo', $Vehiculo); //dato para la sentencia sql
    $ActMen-> bindParam(':MenValor', $Valor); //dato para la sentencia sql
    $ActMen-> bindParam(':MenFecha_Ini', $Inicio); //dato para la sentencia sql
    $ActMen-> bindParam(':MenFecha_Fin', $Fin); //dato para la sentencia sql

    if($ActMen->execute()){ //redirecciona a la pagina 
        header("location: ../../view/RolSupervisor/Mensualidades.php");   
    } else { 
        echo "Error en la actualizacion de la mensualidad";
    }    
}
//llamar función para registrar tarifa a traves del name del boton del formulario 
if (isset($_POST['EdiMen'])) {
    $placa = strtoupper($_POST['MenPlaca']);// convierte a mayusculas 
    // captura de varibles para el valor
    $Vehiculo = $_POST['MenVehiculo'];
    $Tarifa = "Mensualidad";
    // calcular valor
    $Valor = valorMensualidad($con, $Vehiculo, $Tarifa);
    // captura de datos para la fecha fin 
    $dias = $_POST['MenDias']; 
    $fechaIni = $_POST['MenFecha_Ini'];
    //calculo fecha
    $fechaFin = date('Y-m-d', strtotime($fechaIni . '+' . $dias .'days')); //sumar dias

    actualizarMen($con, $_POST['MenId'], $placa, $Vehiculo, $Valor, $fechaIni, $fechaFin); //envia los datos a la funcion 
}

//->Funcion eliminar mensualidad

function eliminarMen($con, $eliminarMen){
    $sql = "DELETE FROM `mensualidades` WHERE MenId = :MenId"; //sentencia sql
    $eliMen = $con->prepare($sql); //preparacion consulta
    $eliMen-> bindParam(':MenId',$eliminarMen); //dato para la sentencia sql

    if($eliMen->execute()){ //redirecciona a la pagina 
        header("location: ../../view/RolSupervisor/Mensualidades.php");   
    } else { 
        echo "<script>alert('Error en la eliminacion de la mensualidad');</script>";
    } 
}

if (isset($_GET['MenId'])){
    $eliminarMen = $_GET['MenId'];
    eliminarMen ($con, $eliminarMen);
}

//Para buscar

function buscarMen($con, $id){
    $sql = "SELECT * FROM `mensualidades` WHERE MenId = :MenId"; //sentencia sql
    $stmt = $con->prepare($sql); //preparacion consulta
    $stmt-> bindParam(':MenId',$id); //dato para la sentencia sql
    $stmt->execute(); //ejecución consulta
    $BusMen = $stmt->fetchAll(PDO::FETCH_ASSOC); //recuperacion consulta
    return $BusMen; // variable return
}

if (isset($_GET['MenId'])){
    $BusMen = $_GET['MenId'];
    buscarMen ($con, $BusMen);
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