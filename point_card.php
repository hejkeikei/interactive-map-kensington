<?php
ob_start();
$point=6;
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
<!-- render a coffee coupon here if meet the criteria -->
<section id="coupon">

</section>

</main>
<?php
include("footer.php");
?>
<script>

</script>
</body>

</html>
<?php ob_end_flush(); ?>