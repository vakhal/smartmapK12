<?php
$dblocation = "localhost";
$dbname = "smartmapK12";
$dbuser = "root";
$dbpass = "";
$dbcnt = mysqli_connect($dblocation,$dbuser,$dbpass,$dbname);
$query = "SELECT `data` from `values` where sensor=".$_POST['id']." order by `date` DESC LIMIT 1" ;
$result = mysqli_query($dbcnt,$query);
$rows = mysqli_fetch_assoc($result);
$value = $rows["data"];

?>
<div class="rack">
    <!--<div class="popup__bg"></div>-->
    <div class="rack__content">
        <h4>Этаж №<?=$_POST['floor']?>. Стойка №<?=$_POST['id']?></h4>
        <p>Температура <?=$value?></p>
    </div>
</div>
