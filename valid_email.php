<!DOCTYPE html>
<html>
<head>
	<title>Email Validator</title>
</head>
<body>
	<form method="post" action="valid_email.php">
		<label>Insert your email address</label>
		<input type="text" id="email" name="email"/>
		<input type="submit" value="Check E-mail"/>
	</form>

	<?php
		if($_POST)
		{
			$email = $_POST['email'];
			# Use filter_var to valid the input
			if(filter_var($email, FILTER_VALIDATE_EMAIL)){
				echo "The email address ".$email." is valid.";
			}
			else{
				echo "The email address ".$email." is unvalid.";
			}
		}
	?>

</body>
</html>