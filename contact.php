<?php
	$to      = 'nebir1993@gmail.com';
	$email   = $_POST['email'];

	$name  = $_POST['name'];
	$subject = $_POST['subject'];
	$message = $_POST['comments'];

		'Reply-To: '. $email . "\r\n" .
		'X-Mailer: PHP/' . phpversion();

	mail($to, $subject, $message, $headers);

	echo "<script>window.location.href = 'http://technext.github.io/Attorney/';</script>";
   
?>