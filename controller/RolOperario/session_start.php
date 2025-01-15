<?php
    session_start();
    //if de sesion sin existencia
    if(!isset($_SESSION['rol'])){
        header ('location: ../index.php');
    }else{ //rol adecuado
            //if de validacion
        if($_SESSION['rol'] != 3){
            header('location: ../index.php');
        }
    }