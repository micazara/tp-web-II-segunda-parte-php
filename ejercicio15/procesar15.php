<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ocurrencias</title>
</head>

<body>
    <h2>Resultados : la aguja en el pajar</h2>
    <?php
    include_once('funcion.php');
   $ocurrencias= enElPajar($palabra, $texto);
    echo "Número de veces que se repite '$palabra' en el texto proporcionado: $ocurrencias";
    ?>

</body>

</html>