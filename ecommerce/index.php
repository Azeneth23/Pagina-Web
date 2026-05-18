<?php

require_once 'models/Producto.php';
/*
|--------------------------------------------------------------------------
| CLASE ProductoController
|--------------------------------------------------------------------------
| Esta clase funciona como el controlador principal del sistema MVC.
| Su función es conectar el modelo con la vista.
*/

class ProductoController {
    /*
    |--------------------------------------------------------------------------
    | MÉTODO mostrarCatalogo()
    |--------------------------------------------------------------------------
    */
    public function mostrarCatalogo(){


        // Crear instancia del modelo Producto
        $producto = new Producto();


        // Obtener todos los productos desde MySQL
        $productos = $producto->obtenerProductos();


        // Cargar la vista principal del catálogo
        require_once 'views/catalogo.php';

    }

}

?>


