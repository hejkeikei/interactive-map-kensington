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
    <div class="imgBox"><img src="images/<?php echo $row['file']; ?>" alt="<?php echo $row['name']; ?>" width="" height=""></div>
    <div class="group">
        <a href="index.php" id="backBtn">Back to map</a>

        <h2><?php echo $row['name']; ?></h2>
        <p><?php echo $row['location']; ?></p>
        <p><?php echo $row['description']; ?></p>

        <button id="showQ" class="btn full">Question</button>
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
        for ($i = 0; $i < count($opts); $i++) {
            echo '<input type="radio" name="option" id="' . $optsTitle[$i] . '" value="' . $optsTitle[$i] . '">';
            echo '<label for="' . $optsTitle[$i] . '">' . $opts[$i] . '</label>';
        }
        ?>

        <!-- please populate this section with database using the format above -->
        <button class="btn full" id="send">Send</button>
    </fieldset>
</section>
</main>
<?php
include("footer.php");
?>
<script src="building_info.js"></script>
<script>
    <?php
  
    echo "var answer ='" . $row['answer'] . "';";
    echo "var id ='".$id ."';";
    ?>
      // set expireday for cookie
      var now = new Date();
      var exday = now.getTime() + (60*60*24); 
          console.log(exday); 

    if(getCookie(id)===""){
        setCookie(id,"false",30);
        
    }else{
        console.log(getCookie(id));
    }

    send.addEventListener('click', function() {
        var userInput = document.querySelector('input[name=option]:checked').value;
        console.log(userInput);
        console.log(answer);
        // let points = document.cookie;
        var points = getCookie('point');
        console.log("get cookie point:"+points);
        // var actualPoints = parseInt(points.split('=')[1]);//conver
        var actualPoints = points;
        // console.log("points splits: ", actualPoints);
        if (userInput === answer){ 
            console.log("Correct Answer!!")
            // console.log("type: ", typeof points); // string  
          
            
            //need set another cookie in here for remember user come before,if they didn't came before then actualPoints++; 
            
            // document.cookie= id+ "=true;expires="+ exday +";";
  
            if(getCookie(id)==='true'){
                console.log("you have been answer this question and got one point before");
            }else{
                setCookie(id,'true',30);
                if (points !== "") {
                    actualPoints++;
                    console.log("Add 1 point.");
                    console.log("Your total point is " + actualPoints);
                    // if point is less than 10, set a update cookie, 
                        if(actualPoints<=9){
                            setCookie("point",actualPoints,30);
                            // document.cookie = "points=" + actualPoints + ";expires="+ exday +";";
                        }         
                } else {
                    //if there no cookie, set cookie for point
                    console.log("else ", actualPoints);
                    actualPoints = 0;
                    setCookie("point",1,30);
                    //document.cookie = "points=1; expires="+ exday +";"; //not sure I am doing right
                    // console.log(points);
                }

            }
                  
            
                
          

        }else{ 
            console.log("Sorry! You got the worng answer, Please try again.");
        }
    });
    

function getCookie(cname) {
  let name = cname + "=";
  let decodedCookie = decodeURIComponent(document.cookie);
  let ca = decodedCookie.split(';');
  for(let i = 0; i <ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}
    //     
    //     compare var answer(A,B or C) and var userInput(A,B or C)
    //     if(answer===userInput){
    //            if(isset cookie){
    //                    getcookie points
    //                     point + 1
    //                     display message "Point add 1"
    //                  }else{
    //                        set cookie
    //                   }
    //     }else{
    //         display message "Wrong guess again"
    //     }
    // }
</script>
<script src="building_info.js"></script>
</body>

</html>