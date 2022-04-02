<?php include 'connect.php'; 

$name = $_POST['game'];
$time = $_POST['tijd'];
$uitlegger = $_POST['uitlegger'];
$aantal = $_POST['aantal'];
$sql = "insert into reservation (name, time, uitleg, players) values ('$name', '$time', '$uitlegger', '$aantal')";
$conn->query($sql);
$conn->db = null;
header("location: reservation.php");

?>