<?php
    // echo '¡Hola ' . htmlspecialchars($_GET["subscriber-mail"]) . '!';
    // Llamando a los campos
    // $nombre = $_GET['nombre'];
    $correo = $_GET['suscriber-mail'];
    //$telefono = $_GET['telefono'];
    //$mensaje = $_GET['mensaje'];

    // Datos para el correo
    $destinatario = "astiazu@gmail.com";
    $asunto = "Contacto de suscripción desde nuestra web";

    //$carta = "De: $nombre \n";
    $carta = "Correo: $correo";
    //$carta .= "Telefono: $telefono \n";
    //$carta .= "Mensaje: $mensaje";

    // Enviando Mensaje
    mail($destinatario, $asunto, $carta);
    //header('Location:transporte.html');

    echo "<script>alert('mensaje enviado!')</script>";
    echo "<script> setTimeout(\"location.href='index.html'\")</script>"

?>