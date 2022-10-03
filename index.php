<?php
include("header.php");
// $server = "localhost";
// $database="jkuo_kensingtonMap";
// $user="jkuo_kensington_kk";
// $pass="wr37+hs)83pK";
// $connection = mysqli_connect($server,$user,$pass,$database);

// if(!$connection){
//     die(mysqli_connect_error());
// }
?>
<section>
  <div id="map">
    <?php include("svg_map.php"); ?>
  </div>
</section>


</main>
<?php
include("footer.php");
?>
<script src="map.js"></script>
</body>

</html>