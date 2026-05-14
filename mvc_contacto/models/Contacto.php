<?php

class Contacto {

    public static function guardar($nombre, $telefono, $correo, $mensaje) {

        // Fecha y hora
        $fecha = date("d/m/Y");
        $hora = date("H:i:s");

        // Texto para guardar
        $texto = "Nombre: $nombre\n";
        $texto .= "Telefono: $telefono\n";
        $texto .= "Correo: $correo\n";
        $texto .= "Mensaje: $mensaje\n";
        $texto .= "Fecha: $fecha\n";
        $texto .= "Hora: $hora\n";
        $texto .= "----------------------\n";

        // Guardar en archivo txt
        file_put_contents("mensajes.txt", $texto, FILE_APPEND);

        // Retornar datos
        return [

            "nombre" => $nombre,
            "telefono" => $telefono,
            "correo" => $correo,
            "mensaje" => $mensaje,
            "fecha" => $fecha,
            "hora" => $hora,
            "estado" => "Mensaje enviado correctamente"

        ];
    }
}

?>