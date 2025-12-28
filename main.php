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
    <header>

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
        <div class="signup"><a href="cabinet.php"><img src="img/user_3334284.png" width="25px" height="25px"></a></div>
        </div>
    </div>

    <div class="scearch">

    <div class="text">
    <div class="t2">Найдите мастера для любой<p>задачи</p></div>
    <div class="t3"> Тысячи проверенных специалистов готовы помочь вам прямо сейчас</div>
        </div>
    <form action="" id="form">

    <input type="text" id="scearch" placeholder="поиск услуг...">

    <button id="btn">найти.</button>


    </form>
    </div>



<div class="h2">Популярные категории</div>
    <div class="label">
        <div class="one"><a href=""><img src="img/сантех.png" height="60px" width="60px"></a><h5>Сантехника</h5></div>
        <div class="one"><a href=""><img src="img/молния.png" height="60px" width="60px"></a><h5>Электрика</h5></div>
        <div class="one" id="label"><a href=""></a><img src="img/уборка.png" height="60px" width="60px"></a><h5>Уборка</h5></div>
        <div class="one"><a href=""><img src="img/ремонт.png" height="60px" width="60px"></a><h5>Ремонт</h5></div>
        <div class="one"><a href=""><img src="img/доставка.png" height="60px" width="60px"></a><h5>Доставка</h5></div>
        <div class="one"><a href=""><img src="img/уроки.png" height="60px" width="60px"></a><h5>Уроки</h5></div>
        <div class="one"><a href=""><img src="img/пк.png" height="60px" width="60px"></a><h5>iT-услуги</h5></div>

    </div>



    </header>
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


