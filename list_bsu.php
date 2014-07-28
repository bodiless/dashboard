<!DOCTYPE html>
<html>
<?php require 'header.php';?>
<body>
<?php require 'menu.php';?>	

<?php

$conn_string = "host=localhost port=5432 dbname=dashboard user=hka password=12345678";
$dbconn = pg_connect($conn_string) or die ("couldn't connect" . pg_last_error());

//$add = pg_insert($dbconn, "INSERT INTO bsu VALUES('3','fs302');") or die ("not possible!" . pg_last_error());
//$sql = "INSERT INTO bsu (bsu_name, customer, customer_contact, location) VALUES('$machine', '$customer', '$customer_contact', '$location')";
//$add = pg_query($dbconn, $sql);
//if ($add){
//	echo "Added.";
//} else {
//	echo "Error.";
//}
$result = pg_query($dbconn, "SELECT * FROM bsu");

if (!$result) {
  echo "An error occurred.";
//  exit;
}

$num_rows = pg_num_rows($result);
$num_fields = pg_num_fields($result);

echo "num rows" . $num_rows;
echo "num fields" . $num_fields;

while ($row = pg_fetch_row($result)) {
  echo "<br />";
	foreach ($row as $i => $value) {
    	echo($row . $row[$i]);
	}
 // for ($i=0;$i<$num_fields;$i++){
  	//echo "id: " . $i ." : ";
  //	echo $row($i) . " : " . $row[$i] ."    ";
  // Name: $row[1]	Customer: $row[2]	Customer contact: $row[3]"
  //}
  echo "<br />";
}
pg_close($dbconn);
?>
<?php include 'footer.php';?>
</body>
</html> 