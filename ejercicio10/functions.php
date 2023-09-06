<?php
$directorio = "../imagenes";

// Obtener una lista de los archivos en el directorio
$archivos = scandir($directorio);

// echo "<h2>Nombres de las imágenes precargadas:</h2>";
echo "<ul>";

// Iterar a través de los archivos y mostrar solo los nombres de las imágenes
foreach ($archivos as $archivo) {
    if ($archivo != "." && $archivo != "..") {
        echo "<li>
    $archivo<a href='/imagenes/$archivo'>$archivo</a>
</li>";

    }
}

echo "</ul>";
?>