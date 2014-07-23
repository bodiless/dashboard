<?php
session_start();

//echo "<head><title>Dashboard, " . $_SESSION["username"] . " </title></head>";
echo "<head><title>Dashboard,{$_SESSION["username"]} </title></head>";

?>