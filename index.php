<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8: punto de partida</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
    <?php
    include_once('header_footer.php');
    echo $header;
    ?>
    <nav>
        <ul>
            <li><a href="ejercicio9/ej9.php">Ejercicio 9</a></li>
            <li><a href="ejercicio10/ej10.php">Ejercicio 10</a></li>
            <li><a href="ejercicio11/ej11.php">Ejercicio 11</a></li>
            <li><a href="ejercicio12/ejercicio12.php">Ejercicio 12</a></li>
            <li><a href="ejercicio13/ej13.php">Ejercicio 13</a></li>
            <li><a href="ejercicio14/ej14.php">Ejercicio 14</a></li>
            <li><a href="ejercicio15/ej15.php">Ejercicio 15</a></li>
        </ul>
    </nav>
    <!-- Realizar una web home en el archivo index.php, que contenga:
- Su nombre y apellido como título
- Un menú horizontal para acceder a los ejercicios por su nombre
- Un iframe con el archivo PDF que contiene el enunciado
- La pantalla de cada ejercicio debe ser igual a ésta, sólo que mostrar en el body la resolución.
(Utilizar includes para el header y footer) -->
    <main><iframe src="Programacio-n-web-2.pdf" style="width: 400px; height: 200px;">
            ></iframe></main>

    <?php
    include_once('header_footer.php');
    echo $footer;
    ?>
</body>



</html>