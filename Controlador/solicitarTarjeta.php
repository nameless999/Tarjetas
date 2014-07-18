<?php

require '../phpmailer/PHPMailerAutoload.php';

date_default_timezone_set('Etc/UTC');

//Create a new PHPMailer instance
$mail = new PHPMailer();
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->isHTML = true;
//Ask for HTML-friendly debug output

//Set the hostname of the mail server
$mail->Host = "smtp.gmail.com";
//Set the SMTP port number - likely to be 25, 465 or 587
$mail->Port = 587;
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';
//Username to use for SMTP authentication	
$mail->Username = "gustavo.hurtado.12@sansano.usm.cl";
//Password to use for SMTP authentication
$mail->Password = "motorola1";
//Set who the message is to be sent from
$mail->setFrom('gustavo.hurtado.12@sansano.usm.cl', 'Gustavo Hurtado');
//Set an alternative reply-to address
$mail->addReplyTo('gustavo.hurtado.12@sansano.usm.cl', 'Gustavo Hurtado');
//Set who the message is to be sent to
$mail->addAddress('xtabox_cs_14@hotmail.com', 'John Doe');
//Set the subject line
$mail->Subject = 'Tarjeta universitaria provisional';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$body = "
		
		<head> <meta> content="charset=utf-8" </meta> </head>
		Estimado, <br>
		Acá van los datos para la creación de una tarjeta estudiantil provisoria.
		<ul>
			<li> Nombre = $_POST[nombre] </li>
			<li> Rol = $_POST[rol] </li>
			<li> Número de boleta = $_POST[numero]</li>
		</ul>
		Este mensaje fue enviado por $_POST[ayudante] <br> <br>
		Importante: Este menseje es generado automáticamente, enviar un email de vuelta si es que existe algún error en los datos.";

$mail->msgHTML($body);
//Replace the plain text body with one created manually
//Attach an image file


if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    header("Location: ../Vista/panel.php");
}

?>