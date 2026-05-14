<?php

// Cargar el controlador
require_once "controllers/ContactoController.php";

// Crear objeto controlador
$controller = new ContactoController();

// Verificar si el formulario fue enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Procesar formulario
    $controller->procesarFormulario();

} else {

    // Mostrar formulario
    $controller->mostrarFormulario();

}

?>