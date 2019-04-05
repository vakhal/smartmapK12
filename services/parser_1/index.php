
<?php
	ini_set('error_reporting', E_ALL);
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	require_once '../simple_html_dom.php';


    $dblocation = "localhost";
    $dbname = "smartmapK12";
    $dbuser = "root";
    $dbpass = "";
    $dbcnt = mysqli_connect($dblocation,$dbuser,$dbpass,$dbname);
    $Insert=true;


    function valueInsert($data,$sensor){
        $query="INSERT INTO `values` SET
                 `sensor`=$sensor
                ,`data`=\"".clear($data)."\"
                ,`date`=\"$GLOBALS[DATE]\"
            ";
        if($GLOBALS['Insert']) mysqli_query($GLOBALS['dbcnt'],$query);
        echo "".clear($data)."\r\n";
    }
	function clear($str){
		return str_replace("°C","",trim(htmlspecialchars(strip_tags ($str), ENT_QUOTES)));
	}
	$DATE=date("Y-m-d H:i:s");
	$httpHost = "http://192.168.0.247/";
	$login_link = 'cmclogin.cgi?210101000000000000';
	$sensor_link = 'cmcget.cgi?40010117';

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,$httpHost.$login_link);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS,"p404=admin&p405=admin");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $server_output = curl_exec($ch);
	$token = substr($server_output,129,10);
    curl_close ($ch);

	$html = file_get_html($httpHost.$sensor_link.$token);
	$result = [];
	if($html){
		$sensors=array(1,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45);
		$i=0;
		foreach ($html->find('td[id=bb18r]') as $row) {
            valueInsert($row,$sensors[$i++]);
		}
	}

    mysqli_close($dbcnt);
?>
