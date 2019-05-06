<?php
require('database.php');
$conn = Database::con();
    $sql ='update board set name="'.$_POST['name'].'",password="'.$_POST['password'].'",title = "'.$_POST['title'].'", description = "'.$_POST['description'].'" WHERE id = '.$_POST['id'];

    mysqli_query($conn,$sql);
    header("Location: list.php");

?>