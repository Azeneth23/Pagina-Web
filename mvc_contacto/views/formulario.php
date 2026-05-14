<!DOCTYPE html>
<html>

<head>

    <title>Formulario MVC</title>

    <style>

        body{
            font-family: Arial;
            background: #85ebfd;
            padding: 40px;
        }

        .contenedor{

            width: 400px;
            margin: auto;
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px gray;

        }

        h2{
            text-align: center;
        }

        input, textarea{

            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid #06977f;

        }

        button{

            width: 100%;
            padding: 12px;
            background: blue;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;

        }

        button:hover{

            background: darkblue;

        }

        .error{

            color: red;
            text-align: center;

        }

    </style>

</head>

<body>

<div class="contenedor">

    <h2>Formulario de Contacto</h2>

    <?php
        if(isset($error)){
            echo "<p class='error'>$error</p>";
        }
    ?>

    <form method="POST">

        <input type="text"
               name="nombre"
               placeholder="Nombre"
               required>

        <input type="text"
               name="telefono"
               placeholder="Telefono"
               required>

        <input type="email"
               name="correo"
               placeholder="Correo"
               required>

        <textarea name="mensaje"
                  placeholder="Escribe tu mensaje"
                  required></textarea>

        <button type="submit">
            Enviar
        </button>

    </form>

</div>

</body>
</html>