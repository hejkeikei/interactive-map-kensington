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
        <h3><?php echo $row['question']; ?></h3>
        <div class="flexbox">
            <?php
            $row['opts'];
            $opts = explode('~', $row['opts']);
            $optsTitle = ['A', 'B', 'C'];
            for ($i = 0; $i < count($opts); $i++) {
                echo '<div class="row">';
                echo '<input type="radio" name="option" id="' . $optsTitle[$i] . '" value="' . $optsTitle[$i] . '">';
                echo '<label for="' . $optsTitle[$i] . '">' . $opts[$i] . '</label>';
                echo '</div>';
            }
            ?>
            <!-- please populate this section with database using the format above -->
        </div>
        <p id="msg" class="hidden">Correct! go to <a href="point_card.php"> your point card</a> to see your points.</p>
    </div>
    <button class="btn full" id="send">Send</button>
</section>
</main>
<?php
include("footer.php");
?>
<script src="building_info.js"></script>
<script>
    var msg = document.getElementById("msg");
    <?php
    // this variable is for compare anwser 
    echo "var answer ='" . $row['answer'] . "';";
    ?>
    //use loop to get radio value
    //var userInput = 
    // when (if)user click "send" button{

    send.addEventListener('click', function() {
        // var userInput = get radio button value(A,B or C)
        var userInput = document.querySelector('input[name=option]:checked').value;
        console.log(userInput);
        console.log(answer);
        let points = document.cookie;
        console.log(points);
        var actualPoints = parseInt(points.split('=')[1]);
        // console.log("points splits: ", actualPoints);
        if (userInput === answer) {
            console.log("Correct Answer!!");
            msg.classList.remove("hidden");
            console.log("type: ", typeof points);
            if (points !== "") {
                actualPoints++;
                console.log("if");
                console.log("Add 1 point.");
                console.log("Your total point is " + actualPoints);
                // set a update cookie
                document.cookie = "points=" + actualPoints + "; expires= 1 year;";
            } else {
                console.log("else ", actualPoints);
                actualPoints = 0
                document.cookie = "points=1; expires= 1 year;";
                // let points = document.cookie;
                // let actualPoints = points.split('=')[1];
                console.log(points);
            }

        } else {
            console.log("Sorry! You got the worng answer, Please try again.")
        }


    })


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
</body>

</html>