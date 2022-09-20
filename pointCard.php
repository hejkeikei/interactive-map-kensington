<?php
if(isset($_COOKIE['point'])){
 echo" <p> you have".$_POST['point']. "points </p>";

}elseif(!isset($_COOKIE['point'])){
    $point=1;
    setcookie('point',$point, strtotime("+1 year"));
    echo" <p> you have".$_POST['point']. "point.</p>";
}elseif($_COOKIE['point']==8){
    echo "<p>Congratulations! You got 8 Points, This is your coffee coupon</p>";//小七店員：機八點 換咖啡喔<3 
}
   





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Point Card</h1>
    </header>

<form action="pointCard.php" method="post">
<legend>How many colour in the Canada flag?</legend>
<label for="1">1</label>
<input type="radio" name="1" id="1">
<label for="1">2</label>
<input type="radio" name="2" id="2">
<label for="1">3</label>
<input type="radio" name="3" id="3">
<?php
$_COOKIES['point'];
?>

<legend>How many colour in Janpan flag?</legend>
<label for="1">1</label>
<input type="radio" name="1" id="1">
<label for="1">2</label>
<input type="radio" name="2" id="2">
<label for="1">3</label>
<input type="radio" name="3" id="3">

 

</body>
</html>