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
    "\n\nMensaje:\nHey James! \n".$_POST["message"];
	
	 mail($destinatario, $asunto, $mensaje, $header)or die('Error Enviado el E-Mail...'); ?>


		<div id="sendmessage" class="">
				<h2>Sent!</h2>
				<p>That's Awesome! </p>
				<p> Thanks a lot! I'll reply as soon as I can </p>
		</div><!-- .sendmessage -->
	 
<?php	} else { ?>

	<div id="sendmessage">
			<form action="contact.php" id="contactform" method="post">
				<h2>Send me a message</h2>
				<p>Hey James:</p>
				<textarea autofocus name="message" id="message"></textarea>
				<p>Best Regards,</p>
				<label for="name">Name </label>
				<input type="text" name="name" id="name" value="" class="text-input" />
				<label for="email">eMail </label>
				<input type="email" name="email" id="email" value="" class="text-input" />
				<input type="submit" name="submit" class="button" value="Send" id="sendbutton">
			</form>
	</div><!-- .sendmessage -->

	<?php } ?>
</body>
</html>