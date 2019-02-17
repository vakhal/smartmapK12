<!DOCTYPE html>
<html>
<head>
    <title>SmartMap</title>
    <link rel="stylesheet" type="text/css" href="/css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="/css/menu.css" />
    <link rel="stylesheet" type="text/css" href="/css/levels.css" />
    <script src="/js/libs/modernizr-custom.js"></script>
    <link rel="shortcut icon" href="favicon.ico">
    <meta charset="utf-8">
</head>
<body>


<div class="container">
    <div class="main">
        <div id="control_buttons" style="display:none">
            <img src="images/zoom-return.svg" id="reset">
            <img src="images/zoom-plus.svg" id="zoom-in">
            <img src="images/zoom-minus.svg" id="zoom-out">
        </div>
        <div class="mall">

            <div class="levels">
                <?
                $levels=3;
                for ($level=1;$level<=$levels;$level++):?>
                <div class="level level--<?=$level?>" aria-label="Level <?=$level?>">
                    <?=file_get_contents(__DIR__ . '/plans/'.$level.'.svg')?>
                </div>
                <?endfor;?>

            </div>
            <!-- /levels -->
        </div>
        <!-- /mall -->
        <button class="boxbutton boxbutton--dark open-search" aria-label="Show search"><svg class="icon icon--search"><use xlink:href="#icon-search"></use></svg></button>
        <nav class="mallnav mallnav--hidden">
            <button class="boxbutton mallnav__button--up" aria-label="Go up"><svg class="icon icon--angle-down"><use xlink:href="#icon-angle-up"></use></svg></button>
            <button class="boxbutton boxbutton--dark mallnav__button--all-levels" aria-label="Back to all levels"><svg class="icon icon--stack"><use xlink:href="#icon-stack"></use></svg></button>
            <button class="boxbutton mallnav__button--down" aria-label="Go down"><svg class="icon icon--angle-down"><use xlink:href="#icon-angle-down"></use></svg></button>
        </nav>

        <!-- content -->
        <!-- content -->
    </div>
    <!-- /main -->
    <?include('menu.php')?>


</div>
<!-- /container -->
<script src="/js/libs/classie.js"></script>
<script src="/js/libs/list.min.js"></script>
<script src="/js/libs/svg-pan-zoom.min.js"></script>
<script src="/js/libs/hammer.min.js"></script>
<script src="/js/panzoom.js"></script>
<script src="/js/3dmap/main.js"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E=" crossorigin="anonymous"></script>

<?include('svg-defs.php')?>
</body>
</html>
