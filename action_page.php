<!DOCTYPE html>
<html>
<head>
	<title>Action Page</title>
	<a href="config.php"></a>
</head>
<body>
	<?php
		$myFile=fopen("newfile.txt", "a+") or die("Unable to story name");

		fwrite($myFile, $_POST["Name"]);
		fwrite($myFile, ",");
		fwrite($myFile, $_POST["Email"]);
		fwrite($myFile, "\n");

		fclose($myFile);

	?>
	<p>Thanks for your submisiion</p>
</body>
</html>