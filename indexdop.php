 <?php
$items = file("list.txt");
//$products = file("products.txt");


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css   ">
    <title>Document</title>
</head>
<body>
    

<style>
.poducts{
    display:flex;
    justify-content:center;
    padding:40px;
   
    width:450px;
    margin-left:250px;
}
.pr{
    margin-top:75px;
    width: 400px;
    border: 1px solid grey;
    padding: 10px 0 0 0;
    border-radius:30px;
}

.pr h2{
    margin-left:165px;
}
.pr h3{
    margin-left:165px;
}
.pr h4{
    margin-left:165px;
    color:grey;
}

.all{
    margin-top:75px;
    padding:50px;
    width:100%;
    display:flex;
    justify-content:center;
}

</style>

</body>
</html>
<div class = "all">
<div class = "products">
 <?php   

foreach ($items as $item ) {
    $i = explode("|", $item);

    echo $i[0];
    echo$i[1];
    echo $i[2];
    
}
// foreach ($products as $product) {
 //   $tovar = explode("|", $product);
   // echo "<div class='pr'>
    //    <h2>$tovar[0]</h2>
   //     <h3>$tovar[1]</h3>
    //    <h4>$tovar[2]</h4> 
        
    // </div>";
//} 
// ?>
</div>
</div> -->