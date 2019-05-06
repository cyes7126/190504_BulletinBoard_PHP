<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="board.css">
</head>

<body>
    <center>
        <?php
           require('header.php');
            echo '<form action="./process_update.php?no='.$_GET['no'].'" method="POST">';
            echo '<ul>';
           ?>


        <?php
                define("DB_SERVER", "localhost");
                define("DB_USER", "root");
                define("DB_PASSWORD", "111111");
                define("DB_DATABASE", "php");
                define("DB_PORT", 3307);

                $conn = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE,DB_PORT);
                
                $sql = "SELECT * FROM board WHERE id =".$_GET['no'];
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_array($result);
                echo '<li><input type="text" name="id" value="'.$row['id'].'" readonly></li>';
                echo '<li><input type="text" name="name" value="'.$row['name'].'"></li>';
                echo '<li><input type="password" name="password" value="'.$row['password'].'"></li>';
                echo '<li><input type="text" name="title" value="'.$row['title'].'"></li>';
                echo '<li><textarea name="description" rows="10">'.$row['description'].'</textarea></li>';
                echo '<li><input type="submit" value="수정" /></li>';
                echo '</ul>';       
                echo '</form>';
        ?>

    </center>
</body>

</html>
