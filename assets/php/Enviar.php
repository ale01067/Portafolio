<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = 'ale01067@gmail.com';
    $subject = 'Nuevo Mensaje del Sitio web';
    $body = "Nombre: $name\n Correo Electrónico: $email\n Mensaje:\n $message";

    if (mail($to, $subject, $body)) {
        echo 'Correo enviado exitosamente.';
    } else {
        echo 'Error al enviar el correo. Por favor, inténtelo de nuevo más tarde.';
    }
} else {
    echo 'Método de solicitud no permitido.';
}
?>
