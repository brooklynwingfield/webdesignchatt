<?php
    define("TITLE", "Mechanics | OXENFREE");
    include('header.php');
?>

    <div id="mechanics">
        <br><br><hr>
        <h1>Mechanics in OXENFREE</h1>
        <p class= "bold">"Oxenfree" primarily focuses on exploration, puzzle-solving, and interactive dialogue.</p>
        <hr><br><br>
        <h3>Here are some of the key mechanics:</h3><br>
        <p>Click any mechanic below to learn more.</p><br>
        <ol>
            <?php
                foreach ($mechanicItems as $mechanic => $item) { ?>

                <li class= "bold"><a href="item.php?item=<?php echo $mechanic; ?>"><?php echo $item["title"]; ?> </a></li>
            
            <?php } ?>
        </ol>
    </div>
    <br><hr>

<?php
    include('footer.php');
?>