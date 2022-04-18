<?php
    include_once "db.php";

    $sql = "SELECT num, title, create_at FROM db_t ORDER BY num";
    $conn= get_conn();
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="write.php"><button>글쓰기</button></a>
    <table>
        <tr>
            <th>번호</th>
            <th>제목</th>
            <th>작성일자</th>
            <?php
            while($row = mysqli_fetch_assoc($result))
            {
                $num = $row['num'];
                $title = $row['title'];
                $create_at = $row['create_at'];
                print "<tr>";
                print "<th>${num}</th>";
                print "<th><a href='detail.php?num=${num}'>${title}</a></th>";
                print "<th>${create_at}</th>";
                print "</tr>";
            }
            ?>
        </tr>
    </table>
</body>
</html>