<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $planeta = $_POST['planeta'];

    if ($planeta !== 'Tierra') {
        // Almacenar la visita en un archivo JSON
        $visita = array('nombre' => $nombre, 'planeta' => $planeta);
        $archivo = 'visitas.json';

        // Leer el archivo actual de visitas y agregar la nueva visita
        $visitas = [];
        if (file_exists($archivo)) {
            $visitas = json_decode(file_get_contents($archivo), true);
        }
        $visitas[] = $visita;

        // Guardar las visitas en el archivo JSON
        file_put_contents($archivo, json_encode($visitas));
    }

    // Después de almacenar la visita en el archivo JSON, redirige al usuario a la página de lista_visitas.php
    header('Location: procesar_formularioVisitas.php');
    exit();

}
?>