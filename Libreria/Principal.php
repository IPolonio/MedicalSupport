<?php 
session_start();

require('class.php');
include ("funciones.php");

$port = $_SERVER['SERVER_PORT'];

define('PWD_SALT','OIDJFOIODFONE');
define('SERVER_URL', 'http://localhost:'.$port);
define('DATABASE','./data');

  