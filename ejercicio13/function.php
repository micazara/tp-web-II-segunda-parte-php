<?php


function procesar($pasos,$menu)
{
    echo "<h2>Tu menú de hoy:</h2>";
    foreach ($pasos as $paso) {
        if (array_key_exists($paso, $menu)) {
            echo "<p>{$menu[$paso]}</p>";
        }
    }
}
