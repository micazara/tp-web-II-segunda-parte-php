<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://www.w3schools.com/w3css/4/w3.css'>
    <title>Menu del día</title>
</head>
<body class="w3-container">
    <?php
    include_once("function.php");
    //LOS PASOS QUE ORDENO EL CLIENTE
$pasos = $_POST['pasos'];
//RECUPERO EL MENU DEL ARCHIVO INI
$menu = parse_ini_file("menu.ini");
    echo procesar($pasos,$menu);
    ?>
</body>
</html>