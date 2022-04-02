<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planningstool</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet"/>

</head>
<body>
    <?php 
        include 'connect.php';
        
        echo '<header><h1>Bekijk alle ' . count($result) . ' spellen die je kunt spelen</h1></header>';
    ?>

        <div id='container'>
            <a class='button' href="reservation.php">Reserveren</a>
        </div>
        <?php foreach ($result as $row){?>
        
        <div id="container">
            <a class="item" href="info.php?id=<?php echo $row['id'] ?>"> 
                <div class="left"> 
                    <img class="avatar" src="./images/<?php echo $row['image'] ?>"> 
                </div> 
                <div class="right"> 
                    <h2> <?php echo $row['name'] ?> </h2>  
                </div> 
            <div class="detailButton"><i class="fas fa-search"></i> bekijk</div> 
            </a> 
        </div>

        <?php }; ?>

<footer>&copy; Gianni 2022</footer>
</body>
</html>