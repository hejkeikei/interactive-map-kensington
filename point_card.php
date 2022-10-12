<?php
ob_start();
include("header.php");
$point = $_COOKIE['point'];

// Generate coupon
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
<div id="pointcard" class="pa-sm">
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
</div>
<!-- render a coffee coupon here if meet the criteria -->
<section id="coupon">
    <h2>
        <?php

        if ($point > 0) {
            echo $point;
        } else {
            echo "0";
        }
        ?>
        /10 points
    </h2>
    <div id="reward">
        <?php
        $pointsNow = $_COOKIE['point'];
        if (isset($_COOKIE['point'])) {
            if ($pointsNow == 10) {
                echo '<h3>Reward: Free Coffee</h3>
                <p>Use this promo code at Jitters to redeem your free coffee!</p>
                <p id="promocode">';
                if (isset($_COOKIE['coupon'])) {
                    echo $_COOKIE['coupon'];
                } else {
                    $promocode = generateRandomString();
                    echo $promocode;
                    setcookie("coupon", $promocode, strtotime("+ 1 year"));
                }
                echo '</p>';
            } else {
                echo '<h3>Collect 10 points to get a reward!</h3>';
            };
        } else {
            echo '<h3>Answer question to collect points!</h3>';
        };
        ?>
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