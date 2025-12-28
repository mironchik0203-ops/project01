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
    



<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);

if(isset( $_SESSION['success'])){
    

    if (isset($_POST['name']) ) {
        $name = $_POST['name'];
        $about = $_POST['about'];
        $email = $_POST['email'];
        $select = $_POST['select'];
        $select2 = $_POST['select2'];
        $num = $_POST['num'];
        $nick = $_POST['nick'];
    
        $pointlist = "$name|$about|$email|$select|$num|$select2|$nick\n";
        $file2 = fopen("list.txt","a");
        fwrite($file2,$pointlist);}




    }
    elseif (!isset( $_SESSION['success'])) {
        header('Location: ITOGP.php');
    }     
?>
<div class = "LOG1">



<form   method ="POST" >

<h2><b>Публикация</b></h2>



  <input type="text" name="name" placeholder = "название услуги" id = "log2" required>


<div>
 <input type="text" name="nick" placeholder = "Имя" id = "nick" required>
</div>


<div class="first">
    <input name="about" placeholder = "о услуге" id = "pass2" required>
</div>

<input name="email" type="email" placeholder = "Gmail" id = "mail" required>


<div>
<input name="num" type="num" placeholder = "Цена" id = "price" required>
</div>


<select name="select" id="select">
<option  id = "one"
 name='one' value="сантехника">сантехника</option>
<option id = "two"
 name='two' value="электрика">электрика</option>
<option id = "one"
 name='three' value="уборка">уборка</option>
<option id = "one"
 name='four' value="ремонт">ремонт</option>
<option id = "one"
name='five' value="доставка">доставка</option>
<option id = "one"
name='six' value="репетиторство">репетиторство</option>
<option id = "one"
 name='seven' value="iT-услуги">iT-услуги</option>

</select>

<select name="select2" id="select2">

<option  name='one' value="Минск">Минск</option>
<option  name='two' value="Гомель">Гомель</option>
<option  name='three' value="Могилев">Могилев</option>
<option  name='four' value="Гродно">Гродно</option>
<option  name='five' value="Витебск">Витебск</option>
<option  name='six' value="Брест">Брест</option>

</select>
<div class="btn">
<button type ="submite" id="btn2">опубликовать</button>
<div class="a">
<a href="main.php"><i>На главную</i></a>
</div>
</div>










</body>
</html>