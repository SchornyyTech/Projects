<?php 
    include_once 'header.php';
?>

    <?php
        if(isset($_SESSION["useruid"])) {
            echo "<p id='welcomemsg'>Hello there " . $_SESSION["useruid"] . "</p>";
        }
    ?>

        <h1>This Is An Introduction</h1>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>

        <section class="index-categories">
            <h2>Some Basic Categories</h2>
            <div class="index-categories-list">
                <div>
                    <h3>Fun Stuff</h3>
                </div>
                <div>
                    <h3>Serious Stuff</h3>
                </div>
                <div>
                    <h3>Exciting Stuff</h3>
                </div>
                <div>
                    <h3>Boring Stuff</h3>
                </div>
            </div>
        </section>

<?php
    include_once 'footer.php';
?>