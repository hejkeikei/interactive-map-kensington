<?php

$point=6;

include("header.php");

// $point= $_COOKIE['point']; 
setcookie('point', $point, strtotime("+1 year"));

?>


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

    
<div id="card">
<?php
//stamp
    for ($i=1; $i<=$point; $i++){
        echo'<div class="stampe"></div>';
      }
//space
for ($i=1; $i<=10-$point; $i++){
    echo'<div class="space"></div>';
  }
    
    ?>

<h2>Your Points</h2>
<div id="poitcard">
    <div class="space stampe"></div>
    <div class="space stampe"></div>
    <div class="space stampe"></div>
    <div class="space stampe"></div>
    <div class="space stampe"></div>
    <div class="space stampe"></div>
    <div class="space stampe"></div>
    <div class="space stampe"></div>
</div>
<!-- render a coffee coupon here if meet the criteria -->
<section id="coupon">

</section>

</main>
<script>

</script>
</body>

</html>