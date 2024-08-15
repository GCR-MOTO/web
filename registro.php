<?php

// Se utiliza para llamar al archivo que contine la conexion a la base de datos
include('conecta.php');

// Validamos que el formulario y que el boton registro haya sido presionado
if(isset($_POST["registro"])) {

// Obtener los valores enviados por el formulario
$email=$_POST["mail"];
$pass=$_POST["pass"];
// Insertamos los datos en la base de datos
$sql="INSERT INTO `usuarios`(`id`, `emal`, `password`) VALUES (null,'$email','$pass')";
$resultado = mysqli_query($conn,$sql);
	if($resultado) {
		// Iserción correcta
		echo "¡FELICIDADES, YA ESTAS REGISTRADO!  ";
        echo'<a href="index.php">Iniciar sesión</a>';
      
        
	} else {
		// Iserción fallida
		echo "¡No se puede insertar la informacion!"."<br>";
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}
?>
