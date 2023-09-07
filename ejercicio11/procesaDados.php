<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado de los dados</title>
</head>

<body>
    <main>
        <?php
        include_once('functions.php');
        lanzar_y_mostrar($cantidad);
        ?>

        <a href="ej11.php">Volver a tirar</a>
    </main>


</body>

</html>