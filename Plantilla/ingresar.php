<?php

include("Conexion.php");
echo "<pre>";

//var_dump($_POST);
$name = trim($_POST['name']);
$pass = trim($_POST['pass']);

$consulta = "SELECT * FROM cliente WHERE nombre = '$name' AND contrasena = '$pass'";
$result =  mysqli_query($conex,$consulta);

if ($result->num_rows >= 1) {
    // vas pa dentro
      header("Location:inicio.html");
} else {
    // vas pa fuera
   header("Location:index.html");
}

echo "</pre>";

?>