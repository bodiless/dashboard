<?php
session_start();
$username = $_POST["username"];
$password = $_POST["password"];

$_SESSION["username"] = $_POST["username"];
$_SESSION["password"] = $_POST["password"];

echo "_SESSION[username]: " . $_SESSION["username"] . "<br />";
echo "_SESSION[password]: " . $_SESSION["password"];

if ($username){
	header("location: dashboard2.php");
}else{
	header("location: index.html");
}

?>