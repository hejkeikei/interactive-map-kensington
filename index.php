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
$query = "SELECT id,name,year,description,location,file,question,opts,answer FROM building";
$sql = mysqli_query($connection, $query);
?>
<div id="mapbox">
  <div id="map">
    <?php include("map_svg.php"); ?>
  </div>
</div>


</main>
<?php
include("footer.php");
echo '<script>';
echo 'const namelist = [';
while ($row = mysqli_fetch_array($sql)) {
  if ($row['id'] == 10) {
    echo "[";
    echo  '"' . $row['name'] . '"';
    echo  ",";
    echo  '"' . $row['location'] . '"';
    echo "]";
    break;
  } else {
    echo "[";
    echo  '"' . $row['name'] . '"';
    echo  ",";
    echo  '"' . $row['location'] . '"';
    echo "]";
    echo ",";
  }
};
echo '];';
echo '</script>';
?>
<script src="map.js"></script>
</body>

</html>