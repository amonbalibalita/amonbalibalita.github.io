<html>
    <head>
    </head>
    <body>
<?php
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$link = mysqli_connect("localhost","root","","web_dev");

	if ($link === false) {
		die("ERROR: Could not connect. " . mysqli_connect_error());
	}

	$sql = "INSERT INTO contact(name, phone, email, message) VALUES ('$name','$phone','$email','$message')";
	if (mysqli_query($link, $sql)) {

		header("location: ../pages/contactSuccess.html");
	} else{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	}

mysqli_close($link);
?>
    </body>
</html>