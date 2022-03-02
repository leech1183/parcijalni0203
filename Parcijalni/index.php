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


if(isset($_POST['submit']))
{
    $baza1->prijava($_POST['ime']);  
};
?>

<html>
<!DOCTYPE html>
<html lan="eng">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page</title>
</head>
<body>

<section class="index-login">
    <div class="wrapper">
        <div class="login-kutija">
            <h4>PRIJAVA NA CHATAPP</h4>
            <form action="ISPIT/pripremaParcijalniPHP/view/chat.php" method="post">
                <div class="txt"> 
                     <input type="text" name="ime" placeholder="Korisnicko ime">
                </div>   
                <br>
                <button type="submit" name="submit">Prijavi se</button>
            </form>
        </div> 
        
</section>

</body>
</html>