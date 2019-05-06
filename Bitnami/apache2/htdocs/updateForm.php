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
                require('database.php');
                $conn = Database::con();
                
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
