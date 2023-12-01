<?php
    $servername = "localhost"; // Cambia si es necesario
    $username = "root"; // root
    $password = ""; // 
    $dbname = "loguin_register_db"; // Cambia al nombre de tu base de datos

    // Crear la conexión
    $conn = new mysqli("localhost", "root", "", "loguin_register_db"); // Agregada coma después de ""

    // Verificar la conexión
    if ($conn->connect_error) {
        die("La conexión falló: " . $conn->connect_error);
    }

    echo "Usuario Registrado";

    // Cerrar la conexión al final del script
    $conn->close();
?>
