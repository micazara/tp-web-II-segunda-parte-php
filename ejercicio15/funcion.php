<?php

$palabra=$_POST['palabra-a-buscar'];
$texto=$_POST['texto-recibido'];

function enElPajar($palabra,$texto){
    $ocurrencias = 0;
    $largoPalabra= strlen($palabra);
    $textoLargo = strlen($texto);

    for ($i = 0; $i <= $textoLargo - $largoPalabra; $i++) {
        $substring = substr($texto, $i, $largoPalabra);

        if ($substring === $palabra) {
            $ocurrencias++;
            $i += $largoPalabra - 1; 
        }
        
    }
    return $ocurrencias;
}