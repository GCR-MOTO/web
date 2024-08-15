<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documento</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="estilos.css">
    <script src="bootstrap.css"></script>
</head>
<body class="m-5" >
<div class="fondo">
<?php
session_start(); #para comerzar una sesion
?>

<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
      <div class="texto"><h2>Bienvenidos a GCRMOTO</h2></div>
        <!-- Formulario de registro -->
        <form action="" method="post">
          <h2 class="mt-5 mb-4">INISIO DE SESION</h2>
          <!-- Campo de entrada para el nombre de usuario -->
          <div class="form-group">
            <input type="email" class="form-control" name="mail"  id="" aria-describedby="emailHelp" placeholder="MAIL" required>
          </div>
          <!-- Campo de entrada para la contraseña -->
          <div class="form-group">
            <input type="password" class="form-control" name="pass" id="" placeholder="PASSWORD" required>
          </div>
          
          <br>
          <input type="submit" value="ENTER" class="btn btn-primary"><br>
          <p class="mt-"><h5>¿No tienes una cuenta? </h5> <a href="registro.html">Crear cuenta</a></p>
      </div>
    </div>
  </div>




<?php
    include "conecta.php";
    if(isset($_POST["mail"])){
        $email=$_POST["mail"];
        $pass=$_POST["pass"]; 


        $query="SELECT * FROM usuarios WHERE emal='$email' and password='$pass'";
        $result = mysqli_query($conn, $query);
        if ($row =  mysqli_fetch_assoc($result)){
            $_SESSION["user"]=$_POST["mail"];
            header("Location:principal.html"); #Para redireccionar 
        }
    else{
?>
        <script>
            alert("USUARIO NO ENCONTRADO");
        </script>
<?php
    }
}
?>

</div>
</body>
</html>