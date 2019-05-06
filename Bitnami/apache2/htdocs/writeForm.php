<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="board.css">
    </head>   
    <body>
       <center>
       <?php
           require('header.php');
           ?>
        <form action="./process_insert.php" method="POST">
            <ul>
                <li><input type="text" name="name" placeholder="이름"></li>
                <li><input type="password" name="password" placeholder="비밀번호"></li>
                <li><input type="text" name="title" placeholder="제목"></li>
                <li><textarea name="description" rows="10" placeholder="본문"></textarea></li>
                <li><input type="submit" value="작성" /></li>
            </ul>       
        </form>
        </center>
    </body>
</html>