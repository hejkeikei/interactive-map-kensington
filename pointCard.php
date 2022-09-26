<?php
if(isset($_POST['submit'])){
     if($_POST['answer']==2){
        
        $_ 
     }

// if(isset($_COOKIE['point'])){
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
    <title>Point Card-test</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Point Card</h1>
    </header>

<form action="pointCard.php" method="post">
<legend>How many colour in the Canada flag?</legend>
<label for="answer">1</label>
<input type="radio" name="answer" value="1" id="1">
<label for="answer">2</label>
<input type="radio" name="answer" value="2" id="2">
<label for="answer">3</label>
<input type="radio" name="answer" value="3" id="3">
<?php
// if($_POST['answer']==2){
//     $_COOKIE['point']++; 
// }else{
//     echo"<p> Sorry, Wrong answer! please try again.</p>";
// }

?>
<input type="submit" value="Send">
</form>
 

</body>
</html>