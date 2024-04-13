<?php
$link = mysqli_connect("localhost","root","","web_dev");

if ($link === false) {
	die("ERROR: Could not connect. " . mysqli_connect_error());
}
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM account WHERE email = '$email' AND password = '$password'";

$result = mysqli_query($link, $sql);

if (mysqli_num_rows($result) === 1) {
	$row = mysqli_fetch_assoc($result);
	if ($row['email'] === $email && $row['password'] === $password) {
		header("Location: ../pages/signinSuccessful.html");
		exit();
	}
else{
	header("Location: ../index.html");
	exit();
}
}
else{
	header("Location: ../index.html");
	exit();
}

mysqli_close($link);
?>