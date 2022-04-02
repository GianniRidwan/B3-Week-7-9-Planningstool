<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include 'connect.php';
        
        $id = $_GET['id'];
        $id--; 
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informatie <?php echo $result[$id]['name'] ?></title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet"/>

</head>
<body>
    <?php 
        echo '<header><h1>' . $result[$id]['name'] . '</h1></header>';

    ?>
<div id='container'>
    <a class='button' href="index.php">Terug naar spellen</a>
</div>
<div id="container">
    <div class="detail">
        <div class="left">
            <img class="image" src="images/<?php echo $result[$id]['image']; ?>">
                <ul class="gear">
                    <li><b><?php if ($result[$id]['expansions'] == NULL){
                        echo "";
                    } else {
                        echo "Expansion:";
                    }; ?>
                    </b> <?php echo $result[$id]['expansions']; ?></li>
                    <li><b><?php if ($result[$id]['skills'] == NULL){
                        echo "";
                    } else {
                        echo "Skills:";
                    }; ?></b> <?php echo $result[$id]['skills']; ?></li>

                    <li><b>Minimaal aantal spelers: </b><?php echo $result[$id]['min_players'] ?></li>
                    <li><b>Maximaal aantal spelers: </b><?php echo $result[$id]['max_players'] ?></li>
                    <li><b>Minuten uitleg: </b><?php echo $result[$id]['explain_minutes'] ?></li>
                    <li><b>Minuten speeltijd: </b><?php echo $result[$id]['play_minutes'] ?></li>
                </ul>
        </div>
        <div class="right">
            <p><?php echo $result[$id]['youtube']; ?></p>
            <a class="buy" href="<?php echo $result[$id]['url']; ?>">Spel kopen</a>
            <p>
            <?php echo $result[$id]['description']; ?>
            </p>
        </div>
        <div style="clear: both"></div>
    </div>
</div>
        
        
<footer>&copy; Gianni 2022</footer>
</body>
</html>