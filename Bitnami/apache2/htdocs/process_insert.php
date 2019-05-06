<?php
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "111111");
define("DB_DATABASE", "php");
define("DB_PORT", 3307);

    $conn = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE,DB_PORT);
        $sql = "INSERT INTO board (name,password,title, description, created) VALUES ('".$_POST['name']."', '".$_POST['password']."', '".$_POST['title']."', '".$_POST['description']."', now())";
        $result = mysqli_query($conn,$sql);
        header("Location: list.php");
        if($result===false){
            echo mysqli_error($conn);
        }
?>