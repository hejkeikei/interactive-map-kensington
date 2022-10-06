<?php
include("header.php");
$server = "localhost";
$database = "jkuo_kensingtonMap";
$user = "jkuo_kensington_kk";
$pass = "wr37+hs)83pK";
$connection = mysqli_connect($server, $user, $pass, $database);

if (!$connection) {
    die(mysqli_connect_error());
}
$query = "SELECT id,name FROM building";
$sql = mysqli_query($connection, $query);
?>
<section id="buildingList">
    <h2>All Building List</h2>
    <ol>
        <?php
        while ($row = mysqli_fetch_array($sql)) {
            echo "<li>" . $row['name'] . "| <a href=building.php?name=" . $row['id'] . ">Jump to info</a></li>";
        }
        ?>
    </ol>

</section>
</main>
<?php
include("footer.php");
?>
</body>

</html>