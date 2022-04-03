<?php include 'connect.php';

$sql = $conn->prepare ("SELECT * FROM reservation");
$sql->execute();
$read = $sql->fetchAll(\PDO::FETCH_ASSOC);
    echo "<tr>";
    foreach ($read as $row) {
    echo "<td>" . $row['name'] . "</td>";
    };
    echo "</tr>";

$conn->db = null;
?>