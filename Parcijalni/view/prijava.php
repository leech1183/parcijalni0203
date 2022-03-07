
<?php 
include '../index.php';
if(isset($_POST['submit']))
{
    $baza1->prijava($_POST['ime']);  
    header('Location:chat.php');
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
            <form action="" method="post">
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
