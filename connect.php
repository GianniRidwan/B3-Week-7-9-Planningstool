<?php
    $db = 'mysql:host=localhost;dbname=planningstool';
    $user = 'root';
    $pass = 'mysql';
try {
    $conn = new PDO($db, $user, $pass);
    echo '';

} catch (PDOException $e) {
    echo "failed" . $e->getMessage();
}

$stmt = $conn->prepare ("SELECT * FROM games");
$stmt->execute();
$result = $stmt->fetchAll(\PDO::FETCH_ASSOC); 

$stment = $conn->prepare ("SELECT * FROM reservation");
$stment->execute();
$reserve = $stment->fetchAll(\PDO::FETCH_ASSOC);
?>