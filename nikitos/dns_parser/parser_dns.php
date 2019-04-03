
<?php
	ini_set('error_reporting', E_ALL);

	ini_set('display_errors', 1);

	ini_set('display_startup_errors', 1);
	require_once 'simple_html_dom.php';


?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>parser</title>
</head>
<body>
<?php
	
	$getcontent=true;

	function translitIt($str)
	{
	    $tr = array(
	        "А"=>"A","Б"=>"B","В"=>"V","Г"=>"G",
	        "Д"=>"D","Е"=>"E","Ж"=>"J","З"=>"Z","И"=>"I",
	        "Й"=>"Y","К"=>"K","Л"=>"L","М"=>"M","Н"=>"N",
	        "О"=>"O","П"=>"P","Р"=>"R","С"=>"S","Т"=>"T",
	        "У"=>"U","Ф"=>"F","Х"=>"H","Ц"=>"TS","Ч"=>"CH",
	        "Ш"=>"SH","Щ"=>"SCH","Ъ"=>"","Ы"=>"YI","Ь"=>"",
	        "Э"=>"E","Ю"=>"YU","Я"=>"YA","а"=>"a","б"=>"b",
	        "в"=>"v","г"=>"g","д"=>"d","е"=>"e","ж"=>"j",
	        "з"=>"z","и"=>"i","й"=>"y","к"=>"k","л"=>"l",
	        "м"=>"m","н"=>"n","о"=>"o","п"=>"p","р"=>"r",
	        "с"=>"s","т"=>"t","у"=>"u","ф"=>"f","х"=>"h",
	        "ц"=>"ts","ч"=>"ch","ш"=>"sh","щ"=>"sch","ъ"=>"y",
	        "ы"=>"yi","ь"=>"","э"=>"e","ю"=>"yu","я"=>"ya",
			"Ё"=>"E","Є"=>"E","Ї"=>"YI","ё"=>"e","є"=>"e","ї"=>"yi",
	        " "=> "-", "/"=> "-","."=>"",":"=>""
	    );
		if (preg_match('/[^A-Za-z0-9_\-]/', $str)) {
			$str = strtr($str,$tr);
			$str = preg_replace('/[^A-Za-z0-9_\-.]/', '', $str);
		}
	    return strtolower($str);
	}
	//CONFIG
    //cmclogin.cgi?030101171554292120
    $dblocation = "localhost";
    $dbname = "smartmapK12";
    $dbuser = "root";
    $dbpass = "";
    $dbcnt = mysqli_connect($dblocation,$dbuser,$dbpass,$dbname);
	$Insert=true;
	//pages to parse
	$httpHost="http://192.168.0.247/";
	$links=array(
		//server1
		  'cmclogin.cgi?030101171554292120'
		 ,'ConnectUPS_Web_SNMP_Card.html'
		//server2
		 ,'Temperature_and_humidity_sensor_files/main.html'
		 ,'UPS_web_page.html'
		//server3
		 ,'UPS_web_page2.html'
		//server4
		 ,'Raduga_Conteg.html'
		 ,'UPS_web_page3.html'
		
	);
	$DATE=date("Y-m-d H:i:s");
	function valueInsert($data,$sensor){
		$query="INSERT INTO `values` SET
			 `sensor`=$sensor
			,`data`=\"".clear($data)."\"
			,`date`=\"$GLOBALS[DATE]\"
	 	";
	 	if($GLOBALS['Insert']) mysqli_query($GLOBALS['dbcnt'],$query);
	 	echo "<p>".$query."</p>";
	}
	function clear($str){
		return str_replace("°C","",trim(htmlspecialchars(strip_tags ($str), ENT_QUOTES)));
	}

	//Server 1
	//Stoyki
	$html = file_get_html($httpHost.$links[0]); 
	if($html ){
		$sensors=array(1,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45);
		$i=0;
		foreach ($html->find('td[id=bb18r]') as $row) {
			valueInsert($row,$sensors[$i++]);
		}
	}

//	//Status, Battery
//	$html = file_get_html($httpHost.$links[1]);
//	if($html ){
//		$rows=$html->find('table tr');
//		valueInsert($rows[15],46);
//		valueInsert($rows[62],47);
//	}
//
//	//________________________________
//	//Server 2
//	//Datchiki
//	$html = file_get_html($httpHost.$links[2]);
//	if($html ){
//		$rows=$html->find('table[border=1] tr');
//		valueInsert($rows[1]->find('td')[2],2);
//		valueInsert($rows[2]->find('td')[2],7);
//		valueInsert($rows[3]->find('td')[2],8);
//		valueInsert($rows[4]->find('td')[2],9);
//	}
//	//Status, Battery
//	$html = file_get_html($httpHost.$links[3]);
//	if($html ){
//		$rows=$html->find('input');
//		if($rows[0]->getAttribute('style')=="background-color: #00FF00")
//			valueInsert("YES",48);
//		else
//			valueInsert("NO",48);
//		if($rows[1]->getAttribute('style')=="background-color: #00FF00")
//			valueInsert("YES",51);
//		else
//			valueInsert("NO",51);
//		if($rows[2]->getAttribute('style')=="background-color: #00FF00")
//			valueInsert("YES",54);
//		else
//			valueInsert("NO",54);
//
//	}
//
//	//________________________________
//	//Server 3
//	//Status, Battery
//	$html = file_get_html($httpHost.$links[4]);
//	if($html){
//		$rows=$html->find('input');
//		if($rows[0]->getAttribute('style')=="background-color: #00FF00")
//			valueInsert("YES",49);
//		else
//			valueInsert("NO",49);
//		if($rows[1]->getAttribute('style')=="background-color: #00FF00")
//			valueInsert("YES",52);
//		else
//			valueInsert("NO",52);
//		if($rows[2]->getAttribute('style')=="background-color: #00FF00")
//			valueInsert("YES",55);
//		else
//			valueInsert("NO",55);
//	}
//
//	//________________________________
//	//Server 4
//	//Kondei
//	$html = file_get_html($httpHost.$links[5]);
//	if($html ){
//		$sensors=array(
//			array(12,18,25),
//			array(13,19,26),
//			array(14,20,27),
//			array(15,21,28),
//			array(16,22,29),
//			array(23,24,30),
//		);
//		$i=0;
//		foreach ($html->find('div[class=cbox] div[style=height:180px;]') as $row) {
//			valueInsert($row->children(1)->children(1),$sensors[$i][0]);
//			valueInsert($row->children(2)->children(1),$sensors[$i][1]);
//			valueInsert($row->children(5)->children(1),$sensors[$i++][2]);
//		}
//
//	}
//	//Status, Battery
//	$html = file_get_html($httpHost.$links[6]);
//	if($html){
//		$rows=$html->find('input');
//		if($rows[0]->getAttribute('style')=="background-color: #00FF00")
//			valueInsert("YES",50);
//		else
//			valueInsert("NO",50);
//		if($rows[1]->getAttribute('style')=="background-color: #00FF00")
//			valueInsert("YES",53);
//		else
//			valueInsert("NO",53);
//		if($rows[2]->getAttribute('style')=="background-color: #00FF00")
//			valueInsert("YES",56);
//		else
//			valueInsert("NO",56);
//	}
	mysqli_close($dbcnt);
	
?>
</body>
</html>