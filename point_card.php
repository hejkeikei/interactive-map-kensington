<?php

$point = 6;

include("header.php");

// $point= $_COOKIE['point']; 
setcookie('point', $point, strtotime("+1 year"));

?>

<div id="pointcard">
    <?php
    //stamp
    for ($i = 1; $i <= $point; $i++) {
        echo '<div class="stampe"></div>';
    }
    //space
    for ($i = 1; $i <= 10 - $point; $i++) {
        echo '<div class="space"></div>';
    }

    ?>
</div>
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