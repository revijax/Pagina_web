<?php

include("Conexion.php");

//var_dump($_POST);

if (isset($_POST['register'])) {
    if(strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['pass']) >= 1) {
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $pass = trim($_POST['pass']);
        $consulta = "INSERT INTO cliente(nombre, email, contrasena) VALUES ('$name','$email','$pass')";
        $resultado = mysqli_query($conex,$consulta);
        header('Location:index.html');


        die();

    }
}
?>