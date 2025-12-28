<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="maino.css">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<div class="tt">
<div class = "LOG">


<form method ="POST" action ="ITOGP.php">

<h2><i>Sign up</i></h2>
<input type="text" name = "login" id = "log" placeholder="Логин" required><br>




<input type="password" name = "pass" id = "pass" placeholder="Пароль"  required><br>



<button type ="submite" id = "btn">Зарегистрироваться</button>
</form>

<?php


if (isset($_POST['login'])) {
   $login = $_POST['login'];
   $pass = $_POST['pass'];

$file = fopen('user.txt', 'a');
fwrite($file,"$login:$pass\n");
fclose($file);


echo " <div class = 'a'> <a href='login.php'>Регистрация прошла успешно нажмите чтоб войти!</a> </div>";
}





?>
</div>
</div>