<?php
require_once "header.php";
require_once "config/ini.php";
require_once "lib/functions.php";

?>

    <div id="container">

    <div id="header" class="row">
        <div class="col-md-2"><img src="img/microsoft-logo-4.png" width="200px"></div>
        <div class="col-md-10"><h1>Название сайта</h1></div>
    </div>

    <div class="row">
        <div class="col-md-2">
            <?php  echo "Сегодня ".receiveDayOfWeek()." ".date(' d ')." ".receiveMonth()." ".date( 'Y')." года. <br> <br>"; ?>
            <?php require_once "views/Vmenu.php";?></div>

        <div class="col-md-10">
            <?php require_once "router.php";?>
        </div>
    </div>
<?php
require_once "footer.php";