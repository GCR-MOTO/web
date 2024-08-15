<?php
session_start(); #para comerzar una sesion
session_unset();#borra todas las variables session
session_destroy();#Elimina la conexion
header("Location:index.php");
exit();
?>