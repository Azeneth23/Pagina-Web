<?php

// Cargar modelo
require_once "models/Contacto.php";

// Clase controlador
class ContactoController {

    // Función para mostrar formulario
    public function mostrarFormulario() {

        require_once "views/formulario.php";

    }

    // Función para procesar formulario
    public function procesarFormulario() {

        // Obtener datos del formulario
        $nombre = $_POST["nombre"];
        $telefono = $_POST["telefono"];
        $correo = $_POST["correo"];
        $mensaje = $_POST["mensaje"];

        // Validar longitud del mensaje
        if(strlen($mensaje) < 10){

            // Mensaje de error
            $error = "El mensaje debe tener mínimo 10 caracteres.";

            require_once "views/formulario.php";
            return;
        }

        // Enviar datos al modelo
        $resultado = Contacto::guardar(
            $nombre,
            $telefono,
            $correo,
            $mensaje
        );

        // Mostrar resultado
        require_once "views/resultado.php";
    }
}

?>