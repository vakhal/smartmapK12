<?php
?>
<div class="room">
    <div class="room__content">
        <h4>Этаж №<?=$_POST['floor']?>. Комната №<?=$_POST['id']?></h4>
        <div class="room__svg">
            <?if(file_exists("svg/".$_POST['floor'].'_'.$_POST['id'].".svg")):?>
                <?=file_get_contents("svg/".$_POST['floor'].'_'.$_POST['id'].".svg");?>
                <script>
                    window.roomPan = initializePan('.room svg');
                </script>
            <?endif?>
        </div>
    </div>
</div>

<script>

    setInterval(function(){
            
			$('#Racks > *').each(function(){
				var sensor_id = $(this).attr('id').split('-')[1];
				$.ajax({
					type: "POST",
					url: "/services/getSensorValue.php",
					data:{sensor_id:sensor_id},
					success: function (data) {
						$('#Rack-'+sensor_id+' text').each(function(){
							if($(this).text().indexOf('°C')!=false){
								if(parseInt(data)<=18){
									$(this).parent().find('rect').css('fill','#0f0');
								}
								if(parseInt(data)<=19 && parseInt(data)>18){
									$(this).parent().find('rect').css('fill','#ff0');
								}
								if(parseInt(data)>19 ){
									$(this).parent().find('rect').css('fill','#f00');
								}
								$(this).text(data+' °C');
							}
						});
					}
				});
			});
        },1000);
</script>
