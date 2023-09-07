<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 12: contador de visitas extraterrestres</title>
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


        <form action="functions.php" method="post">
            <label for="nombre">Nombre del visitante:</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="planeta">Planeta de origen:</label>
            <select id="planeta" name="planeta">
                <option value="Tierra">Tierra</option>
                <option value="Marte">Marte</option>
                <option value="Jupiter">Jupiter</option>
                <option value="Venus">Venus</option>
            </select>

            <button type="submit">Registrar Visita</button>
        </form>


    </main>

    <?php
    include_once('../header_footer.php');
    echo $footer;
    ?>
</body>

</html>