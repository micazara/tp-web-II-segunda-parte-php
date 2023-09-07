<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9: Insta-gramo</title>
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

        <div class="imagenes_precargadas">
            <figure>
                <img src="../imagenes/gato01.png" alt="gato01" class="imagen">
                <figcaption class="pie">Prueba</figcaption>
            </figure>

            <figure>
                <img src="../imagenes/gato02.jpg" alt="gato02" class="imagen">
                <figcaption class="pie">Prueba</figcaption>
            </figure>

            <figure>
                <img src="../imagenes/gato03.jpg" alt="gato03" class="imagen">
                <figcaption class="pie">Prueba</figcaption>
            </figure>
        </div>

        <form action="procesa.php" method="post" enctype="multipart/form-data">
            <label for="imagen">Selecciona una imagen:</label>
            <input type="file" name="imagen" id="imagen">
            <input type="submit" value="Subir Imagen">
        </form>

    </main>

    <?php
    include_once('../header_footer.php');
    echo $footer;
    ?>

    <script src="ejercicio9.js"></script>
</body>

</html>