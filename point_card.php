<?php
ob_start();
// $point = 6;
include("header.php");
$point = $_COOKIE['points'];
// setcookie('point', $point, strtotime("+1 year"));
function generateRandomString($length = 6)
{
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
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
    <h2>
        <?php
        echo $point;
        ?>
        /10 points
    </h2>
    <?php
    $pointsNow = $_COOKIE['points'];
    if (isset($_COOKIE['points'])) {
        echo '<div id="reward">';
        if ($pointsNow == 10) {
            echo '<h3>Reward: Free Coffee</h3>
                <p>Use this promo code at Jitters to redeem your free coffee!</p>
                <p id="promocode">';
            echo generateRandomString();
            echo '</p>';
        } else {
            echo '<h3>Collect 10 points to get a reward!</h3>';
        };
        echo '</div>';
    }
    ?>
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