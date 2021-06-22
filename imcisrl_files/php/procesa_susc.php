<?php
/**
* @version 1.0
*/

//echo "ingresando al formulario",$POST["subscriber-mail"];

require("class.phpmailer.php");
require("class.smtp.php");


// Valores enviados desde el formulario
if ( !isset($_POST["subscriber-mail"]) ) {
    echo ("Es necesario completar todos los datos del formulario");
}
   $email = $_POST["subscriber-mail"];
   $mensaje = "Suscripcion a la información nueva de la página web";

   // Datos de la cuenta de correo utilizada para enviar vía SMTP
   $smtpHost = getenv("imciSmtpHost");  // Dominio alternativo brindado en el email de alta 
   $smtpUsuario = getenv("imciSmtpUser");  // Mi cuenta de correo
   $smtpClave = getenv("imciSmtpPassword");  // Mi contraseña

   // Email donde se enviaran los datos cargados en el formulario de contacto
   $emailDestino = "info@imcisrl.com.ar";

   $mail = new PHPMailer();
   $mail->IsSMTP();
   $mail->SMTPAuth = true;
   $mail->Port = 465; 
   $mail->SMTPSecure = 'ssl';
   $mail->IsHTML(true); 
   $mail->CharSet = "utf-8";


   // VALORES A MODIFICAR //
   $mail->Host = $smtpHost; 
   $mail->Username = $smtpUsuario; 
   $mail->Password = $smtpClave;

   $mail->From = $email; // Email desde donde envío el correo.
   //$mail->FromName = $nombre;//
   $mail->AddAddress($emailDestino); // Esta es la dirección a donde enviamos los datos del formulario

   $mail->Subject = "Solicitud de Suscripción"; // Este es el titulo del email.
   $mensajeHtml = nl2br($mensaje);   
   $mail->Body = "{$mensajeHtml} <br /><br />Solicitud de suscripcion a las novedades de su pagina y Empresa<br />"; // Texto del email en formato 
   $mail->AltBody = "{$mensaje} \n\n Formulario de ejemplo By DonWeb"; // Texto sin formato HTML
   // FIN - VALORES A MODIFICAR //

   $estadoEnvio = $mail->Send(); 
   if($estadoEnvio){
      echo'<script type="text/javascript">
        alert("El correo fue enviado correctamente.");
        window.location.href="http://www.imcisrl.com.ar";
        </script>';
        
   } else {
      echo'<script type="text/javascript">
        alert("Ocurrio un erro en el envío del correo.");
        window.location.href="http://www.imcisrl.com.ar";
        </script>';
      
   }
?>