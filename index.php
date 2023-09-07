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