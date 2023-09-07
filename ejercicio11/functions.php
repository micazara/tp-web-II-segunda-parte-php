<?php
$cantidad = $_POST["numeroDado"];

function lanzar_y_mostrar($cantidad)
{
    $sumaDeLasCaras = 0;
    for ($i = 1; $i <= $cantidad; $i++) {
        $numeroAleatorio = rand(1, 6);

        echo '<img src="img_dados/dado_cara' . $numeroAleatorio . '.png" alt="">';

        $sumaDeLasCaras += $numeroAleatorio;

    }

    echo "<p>Suma de las caras: " . $sumaDeLasCaras;
}

?>