<?php
    include '../../model/conexion.php';
    $con = conectar(); //funcion conectar
    extract($_REQUEST); //extrae los campos post de los formularios

    //->Funcion consultar Vehiculos

    function consultarVehi($con){
        $sql = "SELECT * FROM vehiculos ORDER BY `vehiculos`.`VehHoraEntrada` DESC"; //consulta SQL para obtener los datos de la tabla roles
        $stmt = $con->prepare($sql); //preparar la consulta SQL
        $stmt->execute(); //ejecutar la consulta SQL
        $vehiculo = $stmt->fetchAll(PDO::FETCH_ASSOC); //obtener todos los resultados de la consulta
        return $vehiculo; // variable return
    }
    
    //->Funcion registar Mensualidad

function registrarVeh($con, $Placa, $Vehiculo, $Modelo, $Color, $Ingreso){
    $sql = "INSERT INTO `Vehiculos` (`VehPlaca`, `VehTipo`, `VehModelo`, `VehColor`, `VehHoraEntrada`) VALUES (:VehPlaca, :VehVehiculo, :VehModelo, :VehColor, :VehHoraEntrada)"; //sentencia sql

    $regOpe = $con->prepare($sql); //preparacion consulta
    $regOpe-> bindParam(':VehPlaca', $Placa); //dato para la sentencia sql
    $regOpe-> bindParam(':VehVehiculo', $Vehiculo); //dato para la sentencia sql
    $regOpe-> bindParam(':VehModelo', $Modelo); //dato para la sentencia sql
    $regOpe-> bindParam(':VehColor', $Color); //dato para la sentencia sql
    $regOpe-> bindParam(':VehHoraEntrada', $Ingreso); //dato para la sentencia sql

    if($regOpe->execute()){ //redirecciona a la pagina 
        header("location: ../../view/RolOperario/Ingresos.php");   
    } else { 
        echo "Error en el registro del vehiculo";
    }    
}
//llamar función para registrar tarifa a traves del name del boton del formulario 
if (isset($_POST['RegVeh'])) { 
    // captura de varibles para el valor
    $placa = strtoupper($_POST['VehPlaca']);// convierte a mayusculas
    $Col = strtolower($_POST['VehColor']);// convertir a minuscula
    $color = ucfirst($Col);// capital letter
    registrarVeh($con, $placa, $_POST['VehVehiculo'], $_POST['VehModelo'], $color, $_POST['VehFecha_Ini']); //envia los datos a la funcion 
}

//-> Funcion Recibo ingreso

function reciboIngreso($con, $placa){
    $sql = "SELECT * FROM vehiculos WHERE VehPlaca = :VehPlaca"; //sentencia sql
    $recibo = $con->prepare($sql); //preparacion consulta
    $recibo-> bindParam(':VehPlaca', $placa); //dato para la sentencia sql
    $recibo->execute(); //ejecución consulta
    $ImpIng = $recibo->fetchAll(PDO::FETCH_ASSOC); //recuperacion consulta
    return $ImpIng; // variable returMen
}

$placa = 0;

if (isset($_GET['btn-ImpIng'])){  
    $placa = $_GET['VehPlaca']; 
    reciboIngreso($con, $placa);
} 

///->Funcion para el regsitro del pago 

function formularioPago($con, $placa){
    $sql = "SELECT * FROM vehiculos WHERE VehPlaca = :VehPlaca"; //sentencia sql
    $recibo = $con->prepare($sql); //preparacion consulta
    $recibo-> bindParam(':VehPlaca', $placa); //dato para la sentencia sql
    $recibo->execute(); //ejecución consulta
    $Pago = $recibo->fetchAll(PDO::FETCH_ASSOC); //recuperacion consulta
    return $Pago; // variable returMen
}

$placa = 0;
if (isset($_GET['btn-Pag'])) {  
    $placa = $_GET['VehPlaca']; 
    formularioPago($con, $placa);
} 

//->Funcio consultar valor 

function valorTarifa($con, $Vehiculo, $Tarifa) {

    $sql = "SELECT TarValor FROM tarifas WHERE TarVehiculo = :TarVehiculo AND TarTarifa = :TarTarifa";
    $stmt = $con->prepare($sql); //preparacion consulta
    $stmt-> bindParam(':TarVehiculo', $Vehiculo); //dato para la sentencia sql
    $stmt-> bindParam(':TarTarifa', $Tarifa); //dato para la sentencia sql
    $stmt-> execute(); //ejecución consulta
    $Precio = $stmt->fetchAll(PDO::FETCH_ASSOC); //recuperacion consulta
    $Valor = $Precio[0]['TarValor']; //obtien el valor del array 
    return $Valor;
}

//->Funcion para el calculo del valor 

function calculoValorAMinuto($con, $Vehiculo, $Tarifa, $Minutos, $Valor){
    switch ($Vehiculo) {
        case "Automovil":
            if($Tarifa == "Minuto") {
                $Pagar = $Valor * $Minutos;
            } elseif($Tarifa == "Dia") {
                $Pagar = $Valor;
            }
            break;
        case "Moto":
            if($Tarifa == "Minuto") {
                $Pagar = $Valor * $Minutos;
            } elseif($Tarifa == "Dia") {
                $Pagar = $Valor;
            }
            break;
        case "Bicicleta":
            if($Tarifa == "Minuto") {
                $Pagar = $Valor * $Minutos;
            } elseif($Tarifa == "Dia") {
                $Pagar = $Valor;
            }
            break;
    }
    return $Pagar;
}

//->Funcion Registrar pago 
function registrarPago($con, $placa, $Entrada, $Salida, $Vehiculo, $Tarifa, $Pagar){
    $sql = "INSERT INTO `pagos` (`PagPlaca`, `PagHoraEnt`, `PagHoraSalir`, `PagTipoVeh`, `PagTarifa`, `PagValor`) 
    VALUES (:PagPlaca, :PagHoraEnt, :PagHoraSalir, :PagTipoVeh, :PagTarifa, :PagValor)"; //sentencia sql
    $regPag = $con->prepare($sql); //preparacion consulta
    $regPag-> bindParam(':PagPlaca', $placa); //dato para la sentencia sql
    $regPag-> bindParam(':PagHoraEnt', $Entrada); //dato para la sentencia sql
    $regPag-> bindParam(':PagHoraSalir', $Salida); //dato para la sentencia sql
    $regPag-> bindParam(':PagTipoVeh', $Vehiculo); //dato para la sentencia sql
    $regPag-> bindParam(':PagTarifa', $Tarifa); //dato para la sentencia sql
    $regPag-> bindParam(':PagValor', $Pagar); //dato para la sentencia sql
    
    if($regPag->execute()){ //elimina el vehiculo de la tabla 
        $sql = "DELETE FROM `vehiculos` WHERE VehPlaca = :VehPlaca"; //sentencia sql
        $eliVeh = $con->prepare($sql); //preparacion consulta
        $eliVeh-> bindParam(':VehPlaca', $placa); //dato para la sentencia sql

        if($eliVeh->execute()){ //redirecciona a la pagina 
        header("location: ../../view/RolOperario/Pagos.php");   
        } else { 
        echo "<script>alert('Error en la eliminacion del vehiculo');</script>";
        }   
    } else { 
        echo "Error en el registro del pago";
    }
}
//llamar función para registrar tarifa a traves del name del boton del formulario 
if (isset($_POST['Pagar'])) {
    $placa = strtoupper($_POST['PagPlaca']);// convierte a mayusculas 
    // captura de varibles para el valor
    $Vehiculo = $_POST['PagTipoVeh'];
    $Tarifa = $_POST['PagTarifa'];
    $Entrada = $_POST['PagHoraEnt'];
    $Salida = $_POST['PagHoraSalida'];
    $Minutos = (strtotime($Salida) - strtotime($Entrada))/60; //calcula los minutos 
    // calcular valor
    $Valor = valorTarifa($con, $Vehiculo, $Tarifa);
    $Pag = calculoValorAMinuto($con, $Vehiculo, $Tarifa, $Minutos, $Valor); 
    $Pagar = intval(floor($Pag)); //redondea y hace le numero un entero
    //enviar datos a funcion
    registrarPago($con, $placa, $Entrada, $Salida, $Vehiculo, $Tarifa, $Pagar); //envia los datos a la funcion 
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













