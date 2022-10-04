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
<section>
  <div id="map">
    <?php include("svg_map.php"); ?>
  </div>
</section>


</main>
<?php
include("footer.php");
echo '<script>';
echo 'const namelist = [';
while ($row = mysqli_fetch_array($sql)) {
  if ($row['id'] == 10) {
    break;
  } else {
    echo  '"' . $row['name'] . '"';
    echo  ",";
  }
};
echo ']';
echo '</script>';
?>
<script src="map.js"></script>
</body>

</html>