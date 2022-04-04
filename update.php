<?php include 'connect.php';
$id = $_POST['id'];
$name = $_POST['name'];
$uitleg = $_POST['uitleg'];
$players = $_POST['players'];
$time = $_POST['time'];
$sql = "UPDATE reservation SET name='$name', uitleg='$uitleg', players='$players', time='$time' WHERE id=$id";
$read = $conn->query($sql);
$conn->db = NULL;
echo "<script type='javascript'>alert('Succesvol aangepast!');</script>";
header("location: reservation.php");
?>