<!DOCTYPE html>
<html>

<head>
    <title>Lista de Visitantes</title>
</head>

<body>
    <h1>Lista de Visitantes</h1>


    <?php

    $archivo = 'visitas.json';
    $visitas = [];

    if (file_exists($archivo)) {
        $visitas = json_decode(file_get_contents($archivo), true);
    }

    $totalVisitas = count($visitas);

    if ($totalVisitas > 0) {
        echo "<p>Total de visitantes que no pertenecen a la Tierra: $totalVisitas</p>";
        echo "<ul>";

        foreach ($visitas as $visita) {
            echo "<li>Nombre: " . $visita['nombre'] . ", Planeta: " . $visita['planeta'] . "</li>";
        }

        echo "</ul>";
    } else {
        echo "<p>No hay visitantes que no pertenezcan a la Tierra.</p>";
    }
    ?>

    <p><a href="ejercicio12.php">Volver al Formulario</a></p>
</body>

</html>