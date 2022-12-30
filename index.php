<?php
    include_once 'header.php';
?>
 

<section class="index-intro">
    <?php
        if(isset($_SESSION["useruid"])){
            echo "<p>Hello there, ". $_SESSION["useruid"] . "</p>";
            // echo "<li><a href='includes/logout.inc.php'>Logout</a></li>";
        }
    ?> 

    <h1>Home</h1>
    <p>Home page text</p>
</section>

<section>
    <h2>Categories</h2>
    <div class="index-categories">
        <div>
            <h3>Category 1</h3>
            <p>Category 1 text</p>
        </div>
        <div>
            <h3>Category 2</h3>
            <p>Category 2 text</p>
        </div>
        <div>
            <h3>Category 3</h3>
            <p>Category 3 text</p>
        </div>
</section>


<?php
    include_once 'footer.php';
?>