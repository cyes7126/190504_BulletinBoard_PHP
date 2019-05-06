<?php
class Database{
    public function con(){
        $conn = mysqli_connect("localhost" , "root", "111111", "php",3307);
        return $conn;
    }
}
?>