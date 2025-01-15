<?php
     include 'controller/inicio_sesion.php';
?>              
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Yulisa, Jhon y Andres">
    <meta name="keywords" content="Carro, tarifa, moto, bicicleta, pago, valor, mensualidad, ingreso, salida, parqueadero">
    <meta name="description" content="Interfaz realizada en html para proyecto academico sobre un sistema de informacion de parqueaderos">
    <link rel="shortcut icon" href="img/logo.png">
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">
    <!-- Estilo -->
    <link rel="stylesheet" href="css/stylogin.css">
    <!-- Iconos -->
    <script src="https://kit.fontawesome.com/f96615619f.js" crossorigin="anonymous"></script>    
    <title>Ready Car Park</title>
</head>
<body>
     
     <div class="container right-panel-active">
          <!-- Iniciar Sesion -->   
          <div class="container__form container--signin">  
               <form action="#" method="post" class="form" id="form2">  
                    <h2 class="form__title">Iniciar Sesion</h2>  
                    <input type="text" placeholder="Usuario" class="input" name="usuario">
                    <span class="icon_eye"><i class="fa-solid fa-eye"></i></span>  
                    <input type="password" placeholder="Contraseña" class="input" name="clave">  
                    <a href="#" class="link">Haz click en Ingresar</a> 
                    <button class="btn">Ingresar</button>  
               </form>  
          </div>          
          <!-- Overlay -->  
          <div class="container__overlay">  
               <div class="overlay">  
                    <div class="overlay__panel overlay--left">  
                         <button class="btn" id="signIn">BIENVENIDO</button>  
                    </div>  
               </div>  
          </div>  
     </div>

     <!-- javascript -->
    <!-- <script src="js/prueba.js"></script> -->
    <script src="js/icon.js"></script>
</body>
</html>