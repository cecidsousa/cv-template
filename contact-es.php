<!DOCTYPE html>

<html>
<head>
	<link href='http://fonts.googleapis.com/css?family=Coming+Soon' rel='stylesheet' type='text/css'>
	    
    <link href="http://cxms.me/fw/css/reset.css" rel="stylesheet" type="text/css" />
    <link href="css/styles.css" rel="stylesheet" type="text/css"  />
</head>
<body>

<?php 
	
	if (isset($_POST['email'])) {
    $destinatario='hello@webjac.com';
    $email=$_POST['email'];
    $asunto='Nuevo Contacto - desde: CV';
    $header="From: ".$_POST["name"]." <".$_POST["email"].">\r\n";
    $mensaje="Nombre: ".$_POST["name"].
	"\nCorreo Electronico: ".$_POST["email"].
    "\n\nMensaje:\nHola Jaime! \n".$_POST["message"];
	
	 mail($destinatario, $asunto, $mensaje, $header)or die('Error Enviado el E-Mail...'); ?>

		 <div id="sendmessage">
				<h2> Mensaje Enviado!</h2>
				<p> Me pondré en contacto contigo tan pronto me sea posible</p>
		</div><!-- .sendmessage -->

	 
<?php	} else { ?>	

	<div id="sendmessage">
			<form action="contact-es.php" id="contactform" method="post">
				<h2>Envíame un Mensaje</h2>
				<p>Estimado Jaime:</p>
				<textarea autofocus name="message" id="message"></textarea>
				<p>Atentamente,</p>
				<label for="name">Nombre </label>
				<input type="text" name="name" id="name" value="" class="text-input" />
				<label for="email">eMail </label>
				<input type="email" name="email" id="email" value="" class="text-input" />
				<input type="submit" name="submit" class="button" value="Enviar" id="sendbutton">
			</form>
	</div><!-- .sendmessage -->


	<?php  } ?>
</body>
</html>