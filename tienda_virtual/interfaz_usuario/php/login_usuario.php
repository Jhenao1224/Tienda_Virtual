<?php

include 'conexion.php';

$email = $_POST['email'];
$password = $_POST['contrasena'];

$verificar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$email' AND contrasena='$password'");

if (mysqli_num_rows($verificar_login) > 0) {
    
    
    header("Location: ../login.php");
    exit(); // Es una buena práctica usar exit() después de un redireccionamiento
} else {
    echo '
        <script>
            alert("Usuario no existe, inténtelo nuevamente.");
            window.location = "../index.php";
        </script>
    ';
}

mysqli_close($conexion);
?>
