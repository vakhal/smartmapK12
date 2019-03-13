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
