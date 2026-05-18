<?php
/*
|---------------------------------------------------------
| CONEXIÓN A LA BASE DE DATOS
|---------------------------------------------------------
| Se definen los datos necesarios para conectar PHP
| con MySQL utilizando PDO.
|
*/
$host = "127.0.0.1";
$port = "3307";
$dbname = "ecommerce";
$user = "root";
$password = "";

try {

    // Crear conexión con MySQL
    $conexion = new PDO(
        "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8",
        $user,
        $password
    );

    // Activar reporte de errores
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {

    // Mostrar error si falla la conexión
    die("Error de conexión: " . $e->getMessage());

}

?>