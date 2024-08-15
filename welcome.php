<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="m-5">
<?php
session_start(); 
if(isset($_SESSION["user"])){
echo"<h1>Bienvenidooooooos al HIMALAYA:</h1>";
echo"<h1>".$_SESSION["user"]."</h1>";
echo'<a href="cerrar.php">Cerrar sesión</a>';
}
else {
    echo"<h1>Error </h1>";
}
?>
</body>
</html>