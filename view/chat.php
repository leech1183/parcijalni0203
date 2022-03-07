<?php
include '../index.php';
use DB\DB;
use Config\Config;
$baza2 = DB::getInstance(Config::get('baza'));


if(isset($_POST['submit1']))
{
    $baza2->posalji($_POST['chattxt']);
    $baza2->chathistory();  
};



?>


<html>
<!DOCTYPE html>
<html lan="eng">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page</title>
    <link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>

<section class='chat'>
<form action='' method='post'>
<input type='text' name='chattxt' placeholder='Unesi poruku!'>
<br>
<button type='submit' name='submit1'>Posalji</button>
</body>
</form>
</html>

