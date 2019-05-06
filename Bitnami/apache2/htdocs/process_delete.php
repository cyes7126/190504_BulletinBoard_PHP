<?php
require('database.php');
$conn = Database::con();

$sql = 'DELETE FROM board WHERE id ="'.(int)$_GET['no'].'"';
$result = mysqli_query($conn, $sql);
header("Location: list.php"); 
?>