<?php
session_start();
?>
<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
$items = file("list.txt");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main3.css">
    <title>Document</title>
</head>
<body>
<div class="nav">
    <div class="nav2">
        <div class="logo">Мастера<b>Рядом</b></div>
        <div class="class"><a href="#">Услуги</a></div>
        <div class="signin"><a href="ITOGP.php">Стать мастером</a></div>
        <div class="signin"><a href="login.php">Войти</a></div>
        </div>
        <div class="nav3">
        <div class="signup"><a href="#"><img src="img/сообщение.png" width="19px" height="19px"></a></div>
        <div class="signup"><a href="#"><img src="img/колокольчик.png" width="20px" height="20px"></a></div>
        <div class="usluga"><a href="dop.php">+ Разместить услугу</a></div>
        <div class="signup"><a href="#"><img src="img/user_3334284.png" width="25px" height="25px"></a></div>
        </div>
    </div>

    <?php
    if(isset($_SESSION['login'])){
        $log = $_SESSION['login'];
    }
   echo"
    <div class='scearch'>
    <div class='text'>
    <div class='t6'>Здравствуйте:<p></p><b>$log</b></div>
        </div>
    </div>"
    ?>
    <div class='your'>
        <div class='objets'>Мои публикации</div>
        <div class='likes'>Избранное</div>
    </div>

    <div class="grido">
    <?php
    foreach ($items as $item) {
        $tovar = explode("|", $item);

        $img_src = '';
        if($tovar[3] == 'сантехника'){
            $img_src ='img/kran.jpg';
        }
        elseif ($tovar[3] =='электрика') {
            $img_src ='img/electric.jpg';
        }

        elseif ($tovar[3] =='уборка') {
            $img_src ='img/clean.jpg';
        }

        elseif ($tovar[3] =='ремонт') {
            $img_src ='img/pila.jpg';
        }

        elseif ($tovar[3] =='доставка') {
            $img_src ='img/dilevery.jpg';
        }

        elseif ($tovar[3] =='репетиторство') {
            $img_src ='img/teacher.jpg';
        }

        elseif ($tovar[3] =='iT-услуги') {
            $img_src ='img/pc.jpg';
        }


        echo "<div class='t'><div class='tovar'><div class='tt'>
                <div class='img'><img src='$img_src'></div>
                <div class='fourd'>$tovar[3]</div>
                <div class='first'><b>$tovar[0]</b></div>
                <div class='second'>$tovar[1]</div>
                <div class='seven'><img id = 'img' src='img/user_3334284.png' width='26px' height='26px'><a>$tovar[6]</a></div>
                <div class='line'></div>
                <div class='third'>$tovar[2]</div>
                <div class='six'>$tovar[5]</div>
                <div class='five'>$tovar[4]</div>

       </div></div> </div>";

    }
    ?>
</div>

</body>
</html>