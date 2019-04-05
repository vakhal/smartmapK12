<!DOCTYPE html>
<html>
<head>
    <title>SmartMap</title>
    <link rel="stylesheet" type="text/css" href="css/normalize.css"/>
    <link rel="stylesheet" type="text/css" href="css/menu.css"/>
    <link rel="stylesheet" type="text/css" href="css/levels.css"/>
    <link rel="stylesheet" type="text/css" href="css/popup.css"/>
    <link rel="stylesheet" type="text/css" href="css/room.css"/>
    <script src="js/libs/modernizr-custom.js"></script>
    <link rel="shortcut icon" href="favicon.ico">
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet"
          type="text/css"/>
    <meta charset="utf-8">
</head>
<body>
<? include('popup.php') ?>
<div id="control_buttons" style="display:none">
    <img src="images/zoom-return.svg" id="reset">
    <img src="images/zoom-plus.svg" id="zoom-in">
    <img src="images/zoom-minus.svg" id="zoom-out">
</div>
<div class="container">
    <div class="main">

        <div class="mall">

            <div class="levels">
                <?
                $levels = 3;
                for ($level = 1; $level <= $levels; $level++):?>
                    <div class="level level--<?= $level ?>" aria-label="Level <?= $level ?>">
                        <?= file_get_contents(__DIR__ . '/plans/' . $level . '.svg') ?>
                    </div>
                <? endfor; ?>

            </div>
            <!-- /levels -->
        </div>
        <!-- /mall -->
        <button class="boxbutton boxbutton--dark open-search" aria-label="Show search">
            <svg class="icon icon--search">
                <use xlink:href="#icon-search"></use>
            </svg>
        </button>
        <nav class="mallnav mallnav--hidden">
            <button class="boxbutton mallnav__button--up" aria-label="Go up">
                <svg class="icon icon--angle-down">
                    <use xlink:href="#icon-angle-up"></use>
                </svg>
            </button>
            <button class="boxbutton boxbutton--dark mallnav__button--all-levels" aria-label="Back to all levels">
                <svg class="icon icon--stack">
                    <use xlink:href="#icon-stack"></use>
                </svg>
            </button>
            <button class="boxbutton mallnav__button--down" aria-label="Go down">
                <svg class="icon icon--angle-down">
                    <use xlink:href="#icon-angle-down"></use>
                </svg>
            </button>
        </nav>
        <div id="vslider"></div>
        <div id="hslider"></div>
        <!-- content -->
        <!-- content -->
    </div>
    <!-- /main -->
    <? include('menu.php') ?>


</div>

<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script><!--Подключаем библиотеку Jquery UI-->
<script type="text/javascript">

        rx0 = 70;rx=0;
        rz0=-45;rz=0;

        $("#hslider").slider({
            value: 0,
            min: -30,
            max: 10,
            step: 1,
            slide: function (event, ui) {
                rx = ui.value;
                updateLevelsTransorm();
            }
        });
        $("#vslider").slider({
            value: 0,
            min: -180,
            max: 180,
            orientation: 'vertical',
            step: 1,
            slide: function (event, ui) {
                rz = ui.value;
                updateLevelsTransorm();
            }
        });
        function updateLevelsTransorm(){
            $('.levels').css('transform','rotateX('+(rx0+rx)+'deg) rotateZ('+(rz0+rz)+'deg) translateZ(-15vmin)');
        }
</script>
<style>
    #hslider{
        width: 300px;
        margin: -30px auto;
    }
    #vslider{
        position: fixed;
        left: 20px;
        top:50%;
        transform: translateY(-50%);
        z-index: 10000;
        height: 300px;
    }
    #hslider .ui-slider-handle {
        width: 30px !important;
        height: 30px !important;
        border-radius: 15px 15px 15px 15px !important;
        -webkit-border-radius: 15px 15px 15px 15px !important;
        background: -webkit-linear-gradient(top, #ff770f, #ff5718) !important;
        background: -o-linear-gradient(top, #ff770f, #ff5718) !important;
        background: -ms-linear-gradient(top, #ff770f, #ff5718) !important;
        background: linear-gradient(top, #ff770f, #ff5718) !important;
        border: none !important;
        top: 50% !important;
        margin-top: -15px !important;
        margin-left: -15px !important;
        cursor: pointer !important;
        outline: none !important;
    }
    #vslider .ui-slider-handle {
        width: 30px !important;
        height: 30px !important;
        border-radius: 15px 15px 15px 15px !important;
        -webkit-border-radius: 15px 15px 15px 15px !important;
        background: -webkit-linear-gradient(top, #ff770f, #ff5718) !important;
        background: -o-linear-gradient(top, #ff770f, #ff5718) !important;
        background: -ms-linear-gradient(top, #ff770f, #ff5718) !important;
        background: linear-gradient(top, #ff770f, #ff5718) !important;
        border: none !important;
        left: 50% !important;
        margin-top: -15px !important;
        margin-left: -15px !important;
        cursor: pointer !important;
        outline: none !important;
    }
</style>

<script src="js/libs/classie.js"></script>
<script src="js/libs/list.min.js"></script>
<script src="js/libs/svg-pan-zoom.min.js"></script>
<script src="js/libs/hammer.min.js"></script>
<script src="js/panzoom.js"></script>
<script src="js/popup.js"></script>
<script src="js/3dmap/main.js"></script>


<? include('svg-defs.php') ?>
</body>
</html>
