<?php

$conn_string = "host=localhost port=5432 dbname=dashboard user=hka password=12345678";
$dbconn = pg_connect($conn_string) or die ("couldn't connect" . pg_last_error());

//$add = pg_insert($dbconn, "INSERT INTO bsu VALUES('3','fs302');") or die ("not possible!" . pg_last_error());
$sql = "INSERT INTO bsu (bsu_name, customer, customer_contact, location) VALUES('$machine', '$customer', '$customer_contact', '$location')";
$add = pg_query($dbconn, $sql);
if ($add){
	echo "Added.";
} else {
	echo "Error.";
}
$result = pg_query($dbconn, "SELECT * FROM bsu where bsu_name = '$machine'");

if (!$result) {
  echo "An error occurred.";
//  exit;
}

while ($row = pg_fetch_row($result)) {
  echo "<br />";

  echo "id: $row[0]  Name: $row[1]	Customer: $row[2]	Customer contact: $row[3]";
  echo "<br />";
}
pg_close($dbconn);
?>
