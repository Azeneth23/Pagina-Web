<!DOCTYPE html>
<html>

<head>

    <title>Resultado</title>

    <style>

        body{
            font-family: Arial;
            background: #a1f8c5;
            padding: 40px;
        }

        .resultado{

            width: 400px;
            margin: auto;
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px gray;

        }

        h2{
            color: green;
        }

        a{

            display: inline-block;
            margin-top: 15px;
            text-decoration: none;
            background: blue;
            color: white;
            padding: 10px;
            border-radius: 5px;

        }

    </style>

</head>

<body>

<div class="resultado">

    <h2>
        <?php echo $resultado["estado"]; ?>
    </h2>

    <p>
        <strong>Nombre:</strong>
        <?php echo $resultado["nombre"]; ?>
    </p>

    <p>
        <strong>Telefono:</strong>
        <?php echo $resultado["telefono"]; ?>
    </p>

    <p>
        <strong>Correo:</strong>
        <?php echo $resultado["correo"]; ?>
    </p>

    <p>
        <strong>Mensaje:</strong>
        <?php echo $resultado["mensaje"]; ?>
    </p>

    <p>
        <strong>Fecha:</strong>
        <?php echo $resultado["fecha"]; ?>
    </p>

    <p>
        <strong>Hora:</strong>
        <?php echo $resultado["hora"]; ?>
    </p>

    <a href="index.php">
        Volver
    </a>

</div>

</body>
</html>