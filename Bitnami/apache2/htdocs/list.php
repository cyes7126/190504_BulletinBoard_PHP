<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="board.css">
</head>
<body>
    <center>
       <?php
           require('header.php');
           ?>
        <?php
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "111111");
define("DB_DATABASE", "php");
define("DB_PORT", 3307);

$conn = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE,DB_PORT);
echo "<h2>board list</h2>";
echo '<a href="./writeForm.php">글 작성하러 가기</a>';
$sql = "SELECT * FROM board";
$result = mysqli_query($conn, $sql);

echo "<table>
        <tr>
            <th>글번호</th>
            <th>작성자</th>
            <th>제목</th>
            <th>본문</th>
            <th>작성일</th>
            <th>수정,삭제</th>
        </tr>";
while($row = mysqli_fetch_array($result)) {
    $id = $row['id'];
    echo '<tr><td>'.$id.'</td>';
    echo '<td>'.$row['name'].'</td>';
    echo '<td>'.$row['title'].'</td>';
    echo '<td>'.$row['description'].'</td>';
    echo '<td>'.$row['created'].'</td>';
    echo '<td><a href="./updateForm.php?no='.$id.'">수정</a> <a href="./process_delete.php?no='.$id.'">삭제</a></td></tr>';
}
echo "</table>";
?>        
    </center>
</body>
</html>