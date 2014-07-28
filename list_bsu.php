<!DOCTYPE html>
<html>
<?php require 'header.php';?>
<body>
<?php require 'menu.php';?>	

<?php

$conn_string = "host=localhost port=5432 dbname=dashboard user=hka password=12345678";
$dbconn = pg_connect($conn_string) or die ("couldn't connect" . pg_last_error());

//$add = pg_insert($dbconn, "INSERT INTO bsu VALUES('3','fs302');") or die ("not possible!" . pg_last_error());
$sql = "INSERT INTO bsu (id, name) VALUES('3', 'fs302')";
$add = pg_query($dbconn, $sql);
if ($add){
	echo "Added.";
} else {
	echo "Error.";
}
$result = pg_query($dbconn, "SELECT id, name FROM bsu");

if (!$result) {
  echo "An error occurred.";
//  exit;
}

while ($row = pg_fetch_row($result)) {
  echo "<br />";

  echo "id: $row[0]  Name: $row[1]";
  echo "<br />";
}

?>
<?php include 'footer.php';?>
</body>
</html>