<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Post Email</title>
</head>
<body>
	<?php
		$myEmailAddress = "tuluskalilinux@gmail.com";
		$subject = "Question from Tulus!";

		$name = $_POST['Name'];
		$email = $_POST['Email'];
		$message = $_POST['Message'];
		$header = "from: $name <$email>";

		mail($myEmailAddress, $subject, $message, $header);
	?>
	<p>Thanks for Sending.</p>
</body>
</html>