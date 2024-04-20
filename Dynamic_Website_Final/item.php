<?php
    define("TITLE", "Mechanic Item | OXENFREE");

    include('header.php');

    function strip_bad_chars($input) {
        $output = preg_replace("/[^a-zA-Z0-9_-]/", "", $input);
        return $output;
    }

    if(isset($_GET['item'])) {
        $mechanicItem = strip_bad_chars($_GET['item']);
        $mechanic = $mechanicItems[$mechanicItem];
    }
?>

    <hr>

    <div id="mechanic">
        <h1><?php echo $mechanic["title"]; ?></h1><br>
        <img src="images/<?php echo $mechanic['img']; ?>.png" alt="<?php echo $mechanic['name']; ?>">

        <br><br><br>
        <p class="texts"><?php echo $mechanic["blurb"]; ?></p>
    </div>
    <a href="mechanics.php" class="button previous">&laquo; Back to Mechanics</a>
    
    <hr>

<?php  include('footer.php'); ?>