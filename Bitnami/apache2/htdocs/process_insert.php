<?php
require('database.php');
$conn = Database::con();
        $sql = "INSERT INTO board (name,password,title, description, created) VALUES ('".$_POST['name']."', '".$_POST['password']."', '".$_POST['title']."', '".$_POST['description']."', now())";
        $result = mysqli_query($conn,$sql);
        header("Location: list.php");
        if($result===false){
            echo mysqli_error($conn);
        }
?>