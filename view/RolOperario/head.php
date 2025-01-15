<!-- Inicio HTML -->
<!DOCTYPE html>
<html lang="es">
    <!-- Inicio head -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Andres">
    <meta name="keywords" content="Carro, tarifa, moto, bicicleta, pago, valor, mensualidad, ingreso, salida, parqueadero">
    <meta name="description" content="Interfaz realizada en html para proyecto academico sobre un sistema de informacion de parqueaderos">
    <link rel="shortcut icon" href="../../img/logo.png">
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">
    <!-- Estilo -->
    <link rel="stylesheet" href="../../css/style.css">
    <!-- Iconos -->
    <script src="https://kit.fontawesome.com/f96615619f.js" crossorigin="anonymous"></script>    
    <title>Ready Car Park Admin</title>
</head>
    <!-- Fin head -->
    <!-- Inicio body -->
<body>
    <!-- inicio menu colapsado -->
    <div id="sidemenu" class="menu-collapsed">
        <!-- inicio del HEADER del menu -->
        <div id="header">
            <div id="title"><span>OPERARIOS</span></div>
            <!-- Boton menu -->
            <div id="menu-btn">
                <div class="btn-hamburger"></div>
                <div class="btn-hamburger"></div>
                <div class="btn-hamburger"></div>
            </div>
        </div>
        <!-- fin del HEADER del menu -->
        <!-- inicio del PROFILE del ususario -->
        <div id="profile">
            <div id="photo"><img src="../../img/Supervisor.png" alt="Rol"></div>
            <div id="name"><span>OPERARIO</span></div>
        </div>
        <!-- fin del PROFILE del ususario -->
        <!-- inicio de ITEM del menu -->
        <div id="menu-items">
            <div class="item">
                <a href="Ingresos.php">
                    <div class="icon"><img src="../../img/movimientos.png" alt=""></div>
                <div class="title"><span>REGISTRAR VEHICULO</span></div>
                </a>
                <a href="Pagos.php">
                    <div class="icon"><img src="../../img/registro.png" alt=""></div>
                    <div class="title"><span>PAGOS</span></div>
                </a>
                <a href="../../controller/cerrar_sesion.php">
                    <div class="icon"><img src="../../img/cerrar.png" alt=""></div>
                    <div class="title"><span>CERRAR SESION</span></div>
                </a>
            </div>
        </div>
        <!-- fin de ITEM del menu -->
    </div>
    <!-- fin menu colapsado -->