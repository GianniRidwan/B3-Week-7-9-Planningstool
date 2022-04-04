<?php include 'connect.php';

$sql = $conn->prepare ("SELECT reservation.*,games.play_minutes\n FROM games\n INNER JOIN reservation\n ON games.name = reservation.name ORDER BY time");
$sql->execute();
$read = $sql->fetchAll(\PDO::FETCH_ASSOC);

$id = 0;
if(isset($_GET['id'])){
$id = $_GET['id'];
};

    if ($read != NULL) {
        echo "<tr>";
        echo "<td> Game </td>";
        echo "<td> Uitlegger </td>";
        echo "<td> Aantal spelers </td>";
        echo "<td> Starttijd </td>";
        echo "<td> Speeltijd </td>";
        echo "</tr>";
    };

    foreach ($read as $row) {
        if ($row['id'] == $id) {
            echo '<form action="update.php" method="POST">';
            echo '<td><input type="text" name="name" value="'.$row['name'].'"></td>';
            echo '<td><input type="text" name="uitleg" value="'.$row['uitleg'].'"></td>';
            echo '<td><input type="number" name="players" value="'.$row['players'].'"></td>';
            echo '<td><input type="time" name="time" value="'.$row['time'].'"></td>';
            echo '<td><input type="submit" name="btn" value="Save"onclick="return myUpdate()"></td>';
            echo '<input type="hidden" name="id" value="'.$row['id'].'">';
            echo '</form>';
        } else {
            echo "<tr>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['uitleg'] . "</td>";
            echo "<td>" . $row['players'] . "</td>";
            echo "<td>" . $row['time'] . "</td>";
            echo "<td>" . $row['play_minutes'] . "</td>";
            echo "<td><a class='btn' href='reservation.php?id=" . $row['id'] . "'>Update</a></td>";
            echo "<td><a class='btn' href='delete.php?id=" . $row['id'] . "'onclick='return myFunction()'>Delete</a></td>";
            echo "</tr>";
        };
    };
    
$conn->db = null;
?>