<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserveren</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet"/>

</head>
<body>
    <?php 
        include 'connect.php';
    ?>

<header><h1>Reserveringen</h1></header>

<div id='container'>
    <a class='button' href="index.php">Terug naar spellen</a>
</div>

<table class="table">
    <tbody>
       <?php include 'read.php'; ?>
    </tbody>
</table>

<form id="container" action="create.php" method="POST">
    <label for="game">Kies een spel: </label>
    <select name="game" id="game" <?php foreach ($result as $row){ ?>>
        <option value="<?php echo $row['name'] ?>"><?php echo $row['name'] ?></option>
        <?php }; ?>
    </select>
    <br><br>

    <label for="tijd">Starttijd: </label>
    <input type="time" id="tijd" name="tijd">
    <br><br>

    <label for="uitlegger">Uitlegger: </label>
    <input type="text" id="uitlegger" name="uitlegger">
    <br><br>

    <label for="aantal">Aantal personen: </label>
    <input type="number" id="aantal" name="aantal">
    <br><br>

    <input type="submit">
</form>

<footer>&copy; Gianni 2022</footer>
</body>
</html>