<?php
ob_start();
$point = 6;
include("header.php");
// $point= $_COOKIE['point']; 
setcookie('point', $point, strtotime("+1 year"));

?>
<h2>Your Points</h2>
<section id="pointcard" class="pa-sm">
    <div class="wrap">
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
</section>
<!-- render a coffee coupon here if meet the criteria -->
<section id="coupon">
    <?php
    $pointsNow = $_COOKIE['points'];
    if (isset($_COOKIE['points'])) {
    }
    ?>
    <h2>
        <?php
        echo $points;
        ?>
        /10 points
    </h2>
    <div id="reward">
        <h3>Reward: Free Coffee</h3>
        <p>Use this promo code at Jitters to redeem your free coffee!</p>
        <p id="promocode">

        </p>
    </div>
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