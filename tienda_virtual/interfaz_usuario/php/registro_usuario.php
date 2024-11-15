<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

include 'conexion.php';

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$password = $_POST['contrasena'];


$verificar_email = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$email' ");
if (mysqli_num_rows($verificar_email) > 0) {
    echo '
        <script>
            alert("El email Ya Se encuentra En Uso.");
            window.location = "../index.php";
        </script>
    ';
    exit();
}

$query = "INSERT INTO usuarios(nombre, correo, contrasena) 
          VALUES('$nombre', '$email', '$password')";

$ejecutar = mysqli_query($conexion, $query);

if ($ejecutar) {
    // Enviar correo de confirmación
    $mail = new PHPMailer(true);

    try {
        $mail->SMTPDebug = SMTP::DEBUG_SERVER; 
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'danytohenao@gmail.com';  // Tu correo de Gmail
        $mail->Password   = 'lusuniadhnvfnfmc';        // Tu contraseña de Gmail
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        $mail->setFrom('danytohenao@gmail.com', 'Tienda Virtual');
        $mail->addAddress($email, $username);

        $mail->isHTML(true);
        $mail->Subject = 'Confirmación de Registro';
        $mail->Body    = 'Hola ' . $username . ',<br><br>Gracias por registrarte en nuestro sitio.';
        $mail->AltBody = 'Hola ' . $username . ', Gracias por registrarte en nuestro sitio.';

        $mail->send();
        echo '
            <script>
                alert("Usuario Registrado Correctamente. Se ha enviado un correo de confirmación.");
                window.location = "../index.php";
            </script>
        ';
    } catch (Exception $e) {
        echo '
            <script>
                alert("Usuario Registrado Correctamente. No se pudo enviar el correo de confirmación. Error de PHPMailer: ' . $mail->ErrorInfo . '");
                window.location = "../index.php";
            </script>
        ';
    }
} else {
    echo '
        <script>
            alert("Intentelo Nuevamente.");
            window.location = "../index.php";
        </script>
    ';
}

mysqli_close($conexion);
?>
