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
<div>
  <div id="map">
    <?php include("svg_map.php"); ?>
  </div>
</div>
<div class="msg flexbox" id="msg">
  <p>Scroll to explore Kensington buildings.</p>
</div>


</main>
<?php
include("footer.php");
?>
<script src="map.js"></script>
<?php
while ($row = mysqli_fetch_array($sql)) {
  echo  '"' . $row['name'] . '"';
  if (array_search($row['name'], $row) == count($row) - 1) {
    break;
  } else {
    echo array_search($row['name'], $row);
    echo count($row) - 1;
  }
  echo  ",";
};
echo '<script>';
echo 'const namelist = [';
while ($row = mysqli_fetch_array($sql)) {
  echo  '"' . $row['name'] . '"';
  if (array_search($row['name'], $row) == count($row) - 1) {
    break;
  }
  echo  ",";
};
echo ']';
echo '</script>';
?>
</body>

</html>