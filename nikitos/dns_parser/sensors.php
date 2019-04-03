
<?php
	ini_set('error_reporting', E_ALL);

	ini_set('display_errors', 1);

	ini_set('display_startup_errors', 1);

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Sensors</title>
</head>
<body>
<?php
	
	
	//CONFIG
	$dblocation = "localhost";
	$dbname = "smartmapK12";
	$dbuser = "root";
	$dbpass = "";
	$dbcnt = mysqli_connect($dblocation,$dbuser,$dbpass,$dbname);

	$query="SELECT objects.name as `object`,sensors.name as `sensor`, objects.parent as `parent`, sensors.id as `id` FROM objects, sensors where objects.id=sensors.object Order by objects.id";
	$result=mysqli_query($dbcnt,$query);
	$arr=array();
	while($row=mysqli_fetch_assoc($result)){
		$parent='';
		if($row['parent']!="0"){
			$query="SELECT name,parent  FROM objects where id=".$row['parent'];
			$resulti=mysqli_query($dbcnt,$query);
			$rowi=mysqli_fetch_assoc($resulti);
			$parent=$rowi["name"]." -> ";
		}
		$values='<span style="color:green;">';
		$query="SELECT `data` from `values` where sensor=".$row['id'];
		$resulti=mysqli_query($dbcnt,$query);
		while($rowi=mysqli_fetch_assoc($resulti)){
			$values.=" ".$rowi["data"];
		}
		$values.="</span>";
		$arr[]='<p>'.$parent.$row['object'].' -> '.$row['sensor'].$values.'</p>';
	}
	sort($arr);
	foreach($arr as $row){
		echo $row;
	}
	mysqli_close($dbcnt);
?>
</body>
</html>