<?php
include("header.php");

$server = "localhost";
$database = "jkuo_kensingtonMap";
$user = "jkuo_kensingtonMapAdmin";
$pass = "JchhyaNK+Wcq";
$connection = mysqli_connect($server, $user, $pass, $database);

if (!$connection) {
    die(mysqli_connect_error());
}

?>
<section id="buildingInfo" class="flexbox">
    <!-- please populate this section with database using the format below -->
    <?php
    $id = $_GET['name'];
    $query = "SELECT id,name,year,description,location,file,question,opts,answer FROM building WHERE id=$id";
    $sql = mysqli_query($connection, $query);
    $row = mysqli_fetch_array($sql);

    ?>
    <div class="imgBox"><img src="" alt="" width="" height=""></div>
    <div class="group">
        <a href="index.php" id="backBtn">Back to map</a>

        <h2><?php echo $row['name']; ?></h2>
        <p><?php echo $row['location']; ?></p>
        <p><?php echo $row['description']; ?></p>

        <button id="showQ" class="btn">Challange</button>
    </div>
    <!-- please populate this section with database using the format above -->
</section>
<section id="question" class="hidden">
    <button id="closeBtn" class="btn">X</button>
    <fieldset>
        <!-- please populate this section with database using the format below -->
        <legend><?php echo $row['question']; ?></legend>

        <?php
        $row['opts'];
        $opts = explode('~', $row['opts']);
        $optsTitle = ['A', 'B', 'C'];
        for ($i = 0; $i < 3; $i++) {
            echo '<input type="radio" name="question" id="' . $optsTitle[$i] . '" value="' . $optsTitle[$i] . '">';
            echo '<label for="' . $optsTitle[$i] . '">' . $opts[$i] . '</label>';
        }
        ?>

        <!-- please populate this section with database using the format above -->
        <button class="btn">Send</button>
    </fieldset>
</section>
</main>
<?php
include("footer.php");
?>
<script src="building_info.js"></script>
</body>

</html>