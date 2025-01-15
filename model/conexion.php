<?php
    //Función para establecer una conexión a la base de datos.
    // PDO - Objeto PDO que representa la conexión a la base de datos.

    function conectar() {
        // Configuración de los datos de conexión
        $servidor = "localhost"; // Nombre o dirección IP del servidor de la base de datos
        $usuario = "root"; // Usuario de la base de datos
        $password = ""; // Contraseña de la base de datos
        $bd = "readycarpark"; // Nombre de la base de datos

        try {
            // Crear la cadena de conexión utilizando los datos configurados
            $dsn = "mysql:host=$servidor;dbname=$bd;charset=utf8mb4";

            // Configuración adicional para la conexión PDO
            $opciones = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Configuración del modo de error para lanzar excepciones
                PDO::ATTR_EMULATE_PREPARES => false // Deshabilitar emulación de preparación para usar consultas preparadas reales
            ];

            // Crear una instancia de PDO para establecer la conexión a la base de datos
            $pdo = new PDO($dsn, $usuario, $password, $opciones);

            // Devolver el objeto PDO que representa la conexión exitosa
            return $pdo;
        } catch (PDOException $e) {
            // En caso de excepción, mostrar un mensaje de error con el detalle del error
            echo "Error de conexión: " . $e->getMessage();
        }
    }
  