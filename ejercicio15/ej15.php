<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://www.w3schools.com/w3css/4/w3.css'>
    <title>Buscador de palabras</title>
</head>

<body class="w3-container">
    <h1> Buscando una palabra en un pajar, más bien en
        un String</h1>
    <form action="procesar15.php" method="post">
        <div class="w3-container">
        <label for="palabra-a-buscar">¿Qué palabra se va a repetir?</label>
        <input type="text" name="palabra-a-buscar">
        </div>
        <div class="w3-container">
        <label for="texto-recibido">¿En qué texto la busco?</label>
        <textarea name="texto-recibido" id="texto-recibido" cols="30" rows="10"></textarea>
        </div>
        <button class='w3-button w3-green' type='submit'>¿cuántas veces se repitió la palabra?</button>

    </form>


</body>

</html>