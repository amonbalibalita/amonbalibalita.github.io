<html>
    <head>
    </head>
    <body>
<?php
	$email = $_POST['email'];
	$password = $_POST['password'];
	$link = mysqli_connect("localhost","root","","web_dev");

	if ($link === false) {
		die("ERROR: Could not connect. " . mysqli_connect_error());
	}

	$sql = "INSERT INTO account(email, password) VALUES ('$email','$password')";
	if (mysqli_query($link, $sql)) {

		header("location: ../pages/successful.html");
	} else{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	}

mysqli_close($link);
?>
    </body>
</html>