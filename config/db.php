<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "merpgrandprix";
$dbm = new mysqli($servername, $username, $password, $db);
						
if (!$dbm) {
	die("Connection failed: " . mysqli_connect_error());
}
?>