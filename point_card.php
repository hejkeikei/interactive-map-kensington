<?php
$point=6;
// $point= $_COOKIE['point']; 
setcookie('point',$point, strtotime("+1 year"));

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Point Card</title>
    <style>
        *{
            box-sizing:border-box;
        }
        #card{
            padding:2rem;
            border: 1px solid grey;
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr;
            justify-items: center;
            grid-row-gap: 2rem;
        }
        #card div{
            width:15vw;
            height:15vw;
            border-radius:50%;
            
        }
        .space{
            border: 2px dotted grey;
            background-color: rgb(220, 220, 220);
        }
        .stampe{
            background-color: brown;
        }
        
    </style>
</head>
<body>
    <header> 
        <h1> Point Card</h1>
    </header>
<main>
    
<div id="card">
<?php
//stamp
    for ($i=1; $i<=$point; $i++){
        echo'<div class="stampe"></div>';
      }
//space
for ($i=1; $i<=8-$point; $i++){
    echo'<div class="space"></div>';
  }
    
    ?>

    
</div>

</main>
<script>

</script>
</body>
</html>