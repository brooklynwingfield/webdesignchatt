<?php
    define("TITLE", "Characters | OXENFREE");
    include('header.php');
?>

    <div id="characters" class="cf">
        <br><br><hr>
        <h1>Characters in OXENFREE</h1>
        <p class= "bold">In "Oxenfree," each character has a distinct personality and backstory that adds depth to the narrative. Here's a brief bio of each main character:</p>
        <?php
            foreach($characters as $character) {
        ?>

            <div class="character">
                <img src="images/<?php echo $character['img']; ?>.jpg" alt="<?php echo $character['name']; ?>">
                <h2><?php echo $character["name"]; ?></h2>
                <p><?php echo $character["bio"]; ?></p>
            </div> 

        <?php
            }
        ?>

        <?php
            foreach($moreCharacters as $character2) {
        ?>

            <div class="character2">
                <img src="images/<?php echo $character2['img']; ?>.jpg" alt="<?php echo $character2['name']; ?>">
                <h2><?php echo $character2["name"]; ?></h2>
                <p><?php echo $character2["bio"]; ?></p>
            </div> 

        <?php
            }
        ?>
    <div id= "character-banner">
    <img src="images/character-banner.png" alt="Characters Photo">
    </div>
        
    </div>
    <div id="text">
        <hr><br>
        <h3>The Experience:</h3><br>
        <p>These characters, along with others encountered throughout the game, contribute to the rich storytelling and dynamic relationships that define the experience of "Oxenfree." Each character brings their own strengths, weaknesses, and personal baggage to the story, shaping the player's journey through the supernatural mysteries of Edwards Island.</p>
    </div>

    <hr><br>

<?php
    include('footer.php');
?>