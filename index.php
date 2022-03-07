<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'core/init.php';
use Config\Config;
use DB\DB;

echo '<pre>';
//var_dump(Config::get('baza'));
echo '</pre>';

$baza1 = DB::getInstance(Config::get('baza'));




?>

