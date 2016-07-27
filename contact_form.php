<?php
//LINEAS AGREGADAS
$name=$_POST["nam"];
$email=$_POST["ema"];
$phone=$_POST["pho"];
$message=$_POST["mes"];
//---------------------------------------
require("class.phpmailer.php");

		$mail = new PHPMailer();
		$mail->IsSMTP(); // envio via SMTP
		$mail->Host = "mail.domain.cl"; // servidor SMTP
		$mail->SMTPAuth = true; // autenticacion SMTP activada
		$mail->Username = "mail@domain.cl"; // usuario SMTP (va con arroba y nombre de dominio)
		$mail->Password = "password here"; // password SMTP				
		$mail->From = "sendby@domain.cl";
		$mail->FromName = "Name Who send Mail";
		$asunto = "Subject here";
		$mail->Subject = utf8_encode("=?UTF-8?B?" . base64_encode($asunto) .  "?=");
		$mail->AddAddress("tomail@domain.cl");




$body = "


<style type=`'text/css'>
	body{margin:0; padding:0; font-family:Arial, Helvetica, sans-serif; font-size:12px}
</style>		
<!--<div align='center'><img src='http://www.domain.cl/es/mail/header.jpg'></div>-->
<br>
<br>							

<table width='750'  align='center'>
	<tr>
		<td><h3>Formulario de Contacto Dominio.cl</h3></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td><table width='100%' border='1' cellpadding='5' cellspacing='0'>
			<tr>
				<td><p>Nombre</p></td>
				<td>".$name."</td>
			</tr>
			<tr>
				<td><p>Email</p></td>
				<td>".$email."</td>
			</tr>
			<tr>
				<td><p>Teléfono</p></td>
				<td>".$phone."</td>
			</tr>
			<tr>
				<td><p>Mensaje</p></td>
				<td>".$message."</td>
			</tr>			
		</table></td>
	</tr>
</table>

";


$mail->Body = $body;
$mail->IsHTML(true);
$mail->Send();
if ($mail) {
	echo 1;
} else {
	echo 0;
}

























?>