<?php
include 'conexion_be.php';
// Conexión a la base de datos
$conexion = mysqli_connect("localhost", "root", "", "loguin_register_db");


// Verificar si el formulario se envió
if ($_SERVER["REQUEST_METHOD"] == "POST") 
    // Obtener los valores del formulario
    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    // Query de inserción
    $insert_query = "INSERT INTO usuarios (nombre_completo, correo, usuario, contrasena) 
    VALUES ('$nombre_completo', '$correo', '$usuario', '$contrasena')";
$resultado = mysqli_query($conexion, $insert_query);

    
    // ... Tu código anterior ...
    
    if ($ejecutar) {
        header("Location: ../index.php");
        exit(); // Importante: asegúrate de salir del script después de la redirección
    } else {
        header("Location: ../index.php");
        exit(); // También aquí
    }

?>