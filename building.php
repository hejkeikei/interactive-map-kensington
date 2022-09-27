<?php
include("header.php");
?>
<section id="buildingInfo">
    <div class="imgBox"><img src="" alt="" width="" height=""></div>
    <h2>building A</h2>
    <p>Address:</p>
    <p>Description:</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit illum non, molestias earum inventore optio ipsum numquam doloribus ullam ab quia consequatur suscipit vel ex! Soluta delectus molestiae distinctio beatae accusantium fuga, voluptatum cupiditate vel aliquid libero corrupti dolore ab quam voluptatem sequi omnis culpa, porro, magni dolor perferendis exercitationem.</p>
    <button id="showQ" class="btn">Challange</button>
</section>
<section id="question" class="hidden">
    <button id="closeBtn">X</button>
    <!-- please populate this section with database using the format below -->
    <fieldset>
        <legend>What is the name of building?</legend>
        <input type="radio" name="question" id="A" value="A">
        <label for="A">Answer A</label>
        <input type="radio" name="question" id="B" value="B">
        <label for="B">Answer B</label>
        <input type="radio" name="question" id="C" value="C">
        <label for="C">Answer C</label>
        <input type="submit" value="Answer" class="btn">
    </fieldset>
    <!-- please populate this section with database using the format above -->
</section>
</main>
<?php
include("footer.php");
?>
<script src="building_info.js"></script>
</body>

</html>