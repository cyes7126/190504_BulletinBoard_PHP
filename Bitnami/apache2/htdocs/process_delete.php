<?php
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "111111");
define("DB_DATABASE", "php");
define("DB_PORT", 3307);

$conn = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE,DB_PORT);

$sql = 'DELETE FROM board WHERE id ="'.(int)$_GET['no'].'"';
$result = mysqli_query($conn, $sql);
header("Location: list.php"); 
?>