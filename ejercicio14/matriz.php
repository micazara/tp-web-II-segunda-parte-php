<?php
$n = $_POST['dimension'];
function crearMatriz($n)
{
    $matriz = array();
    for ($i = 0; $i < $n; $i++) {
        $fila = array();
        for ($j = 0; $j < $n; $j++) {
            
            $numero = rand(1, 9);
            $fila[] = $numero;
        }
        $matriz[] = $fila;
    }
    return $matriz;
}

$matrizNueva = crearMatriz($n);
function mostrarMatriz($matrizNueva,$n){
    //MUESTRO LA MATRIZ EN SI
    foreach ($matrizNueva as $fila) {
    foreach ($fila as $numero) {
        echo $numero . " ";
    }
    echo "<br>";
}
//MUESTRO DIAGONAL PRINCIPAL
recorrerDiagonal($matrizNueva,$n);
recorrerDiagonalSecundaria($matrizNueva,$n);
sumarTodo($matrizNueva,$n);
}


function recorrerDiagonal($nueva,$n){
    echo "<div>". 'La diagonal principal : ' . "</div>";
    for ($i = 0; $i < $n; $i++) { 
                    echo    $nueva[$i][$i] . " " ;     
                    }
}


function recorrerDiagonalSecundaria($nueva,$n){
    echo "<div>". 'La diagonal secundaria: ' . "</div>";
    for ($i = 0; $i < $n; $i++) {   
                  echo $nueva[$i][$n - 1 - $i] . " ";         }
}
function sumarTodo($nueva,$n){
    echo "<div>". 'La suma de los valores de la matriz : ' . "</div>";
    $suma = 0;         for ($i = 0; $i < $n; $i++) {             for ($j = 0; $j < $n; $j++)
         {                
             $suma += $nueva[$i][$j];             }         }
             echo   $suma;
}