<?php include 'connect.php'; 
$id = $_GET['id'];
$sql = "DELETE FROM reservation WHERE id=$id";
$conn->query($sql);
$conn->db = NULL;
header("location: reservation.php");
?>