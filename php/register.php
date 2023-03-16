<?php

$servername = "localhost";
$username  = "root";
$password = "";
$dbname = "user_info";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$Name = $_POST['username'];
$Email = $_POST['email_id'];
$Password= $_POST['password'];

$stmt = $conn->prepare("INSERT INTO firstname(username, email_id, pass) VALUES(?, ?, ?)");
$stmt->bind_param("sss", $Name, $Email, $Password);
$stmt->execute();

$stmt->close();
$conn->close();

header("Location: http://localhost/GUVI/login.html");
exit();
?>