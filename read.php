<?php include 'connect.php';

$sql = $conn->prepare ("SELECT * FROM reservation");
$sql->execute();
$read = $sql->fetchAll(\PDO::FETCH_ASSOC);

    if ($read != NULL) {
        echo "<tr>";
        echo "<td> Game </td>";
        echo "<td> Uitlegger </td>";
        echo "<td> Aantal spelers </td>";
        echo "<td> Starttijd </td>";
        echo "</tr>";
    }

    foreach ($read as $row) {
        echo "<tr>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['uitleg'] . "</td>";
        echo "<td>" . $row['players'] . "</td>";
        echo "<td>" . $row['time'] . "</td>";
        echo "</tr>";
    };
    
$conn->db = null;
?>