<?php
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "111111");
define("DB_DATABASE", "php");
define("DB_PORT", 3307);

    $conn = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE,DB_PORT);
    $sql ='update board set name="'.$_POST['name'].'",password="'.$_POST['password'].'",title = "'.$_POST['title'].'", description = "'.$_POST['description'].'" WHERE id = '.$_POST['id'];

    mysqli_query($conn,$sql);
    header("Location: list.php");

?>