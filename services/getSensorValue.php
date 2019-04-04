<?php
$dblocation = "localhost";
$dbname = "smartmapK12";
$dbuser = "root";
$dbpass = "";
$dbcnt = mysqli_connect($dblocation,$dbuser,$dbpass,$dbname);
$query = "SELECT `data` from `values` where sensor=".$_POST['sensor_id']." order by `date` DESC LIMIT 1" ;
$result = mysqli_query($dbcnt,$query);
$rows = mysqli_fetch_assoc($result);
$value = $rows["data"];
echo $value
?>