<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://www.w3schools.com/w3css/4/w3.css'>
    <title>Seleccion de Menu</title>

</head>

<body class="w3-container w3-pale-yellow">
    <h1>¿Qué desea comer hoy?</h1>
    <form method="post" action='procesa-menu.php'>
        <div class="w3-container">
            <label for="entrada" class=" w3-red">ENTRADA <input type="checkbox" name="pasos[]" value="entrada" class="w3-check"></label>


        </div>
        <div class="w3-container">
            <label for="plato-principal" class="w3-red">PLATO PRINCIPAL <input type="checkbox" name="pasos[]" value="plato" class="w3-check"> </label>


        </div>
        <div class="w3-container">
            <label for="acompañamiento" class="w3-red">ACOMPAÑAMIENTO <input type="checkbox" name="pasos[]" value="acompañamiento" class="w3-check"> </label>


        </div>
        <div class="w3-container">
            <label for="postre" class="w3-red">POSTRE<input type="checkbox" name="pasos[]" value="postre" class="w3-check"></label>

        </div>

        <button class='w3-button w3-green' type='submit'>dame el resultado</button>


    </form>
</body>

</html>