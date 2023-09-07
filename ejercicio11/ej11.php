<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 11: lanzar dados</title>
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

        <form action="procesaDados.php" method="post">
            <label for="numeroDado">Selecciona cuantos dados queres tirar:</label>
            <select name="numeroDado">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
            </select>
            <input type="submit" value="Lanzar dados">
        </form>

        

    </main>
    <?php
    include_once('../header_footer.php');
    echo $footer;
    ?>
</body>

</html>