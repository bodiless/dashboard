<?php
session_start();
//echo "Welcome,<b> " . $_SESSION["username"] . "</b>";
echo '<!DOCTYPE html>
<html>
<head>
	<title>Dashboard  $_SESSION["username"]; </title>
</head>
<body>

<table width="100px" height="100px" border="1px solid black">
	<tr><td>Issues:</td><td>Date: </td></tr>
	<tr><td>BSU:</td><td></td></tr>

</table>
</body>
</html>';

?>
