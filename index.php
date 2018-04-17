<?php
require_once "header.php";
require_once "config/ini.php";

$connect_to_db = new app\classes\Db1();
require_once "views/Vmenu.php";
require_once "router.php";
