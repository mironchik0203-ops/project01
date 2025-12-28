<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tuff.css">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<div class = "LOG">



<form method ="POST" action ="login.php">

<h2>Sing in</h2>




<input type="text" name = "login" id = "log" placeholder="Логин" required>



<div class="first">
<input type="password" name = "pass" id = "pass" placeholder="Пароль" required>

</div>

<button type ="submite" id="btn">Войти</button>

</form>


<?php






if (isset($_POST['login'])) {
   $login = $_POST['login'];
   $pass = $_POST['pass'];

   $file = file('user.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $point = false;
    

    foreach($file as $line){
        $stroka = explode(':', trim($line));

        if ($stroka[0] == $login && $pass == $stroka[1]) {
           $_SESSION['login'] = $login;
           $point = true;
           $_SESSION['success']  = true;
           break;
        }
    }


    if($point){
        $_SESSION['success']  = true;
        echo "<a href='main.php'><div class = 'a2'>Нажмите чтоб вернуться на главную</div></a>";
    }

    else {
        echo "Try again";
    }
}



?>









</div>
