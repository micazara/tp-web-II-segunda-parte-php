<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_FILES["imagen"]["error"] === UPLOAD_ERR_OK) {
        $nombreArchivo = $_FILES["imagen"]["name"];
        $carpetaDestino = "imagenes";
        $rutaCompleta = $carpetaDestino . $nombreArchivo;

        // Mueve el archivo desde la ubicación temporal al destino
        if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $rutaCompleta)) {
            echo "La imagen se ha subido correctamente.<br>";
            echo "Nombre del archivo: " . $nombreArchivo . "<br>";

            // Mostrar la imagen cargada
            echo '<img src="' . $rutaCompleta . '" alt="Imagen subida">';
        } else {
            echo "Error al mover el archivo a la carpeta de destino.";
        }
    } else {
        echo "Error al subir la imagen. Código de error: " . $_FILES["imagen"]["error"];
    }
}
?>
