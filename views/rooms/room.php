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
	function update(){
		$.ajax({
			type: "POST",
			url: "/services/parser_1/index.php",
			success: function (data) {
				console.log(data);
			}
		});
		$('#Racks > *').each(function(){
			var sensor_id = $(this).attr('id').split('-')[1];
			$.ajax({
				type: "POST",
				url: "/services/getSensorValue.php",
				data:{sensor_id:sensor_id},
				success: function (data) {
					$('#Rack-'+sensor_id+' text').each(function(){
						if($(this).text().indexOf('°C')!=false){
							if(parseInt(data)<=30){
								$(this).parent().find('rect').css('fill','#0f0');
							}
							if(parseInt(data)<=50 && parseInt(data)>30){
								$(this).parent().find('rect').css('fill','#fa0');
							}
							if(parseInt(data)>50 ){
								$(this).parent().find('rect').css('fill','#f00');
							}
							$(this).text(data+' °C');
						}
					});
				}
			});
		});
	}
	update();
    setInterval(update,5000);
</script>
