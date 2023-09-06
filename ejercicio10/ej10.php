<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10: Insta-reciclado (para cuidar el medio ambiente)</title>
    <link rel="stylesheet" href="estilos.css">

</head>

<body>
    <?php
    include_once('../header_footer.php');
    echo $header;
    ?>
    <nav>
        <ul>
            <li></li>
        </ul>
    </nav>
    <main><iframe src="../Programacio-n-web-2.pdf" style="width: 400px; height: 200px;">
            ></iframe>

        <!-- Reutilizando el ejercicio anterior, realizar una web que liste todos los nombres de imagenes que
contiene en la carpeta /imagenes cómo link, que al hacer clic, lleve a una segunda pantalla donde
efectivamente se muestre dicha imagen.
 -->

        <?php
        include_once('functions.php');
        ?>

    </main>
    <?php
    include_once('../header_footer.php');
    echo $footer;
    ?>
</body>

</html>