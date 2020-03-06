<?php
	if(isset($_POST["submit"])) {
		$recipient="hdaugaard99@gmail.com";
		$subject="Adoption Application";
		$sender=$_POST["sender"];
		$senderEmail=$_POST["senderEmail"];
		$message=$_POST["message"];
		
		$mailBody = "Name: $sender\nEmail: $senderEmail\n\n$message";
		
		mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");
		
		$thankYou="<p>Thank you! Your message has been sent.</p>";
	}
?>



<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
	
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<label>Name:</label>
		<input name="sender">
		
		<label>Email address:</label>
		<input name="senderEmail">
		
		<label>Message:</label>
		<textarea rows="5" cols="20" name="message"></textarea>
		
		<input type="submit" name="submit">
	</form>
</body>
</html>