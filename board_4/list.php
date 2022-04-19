<?php
    include_once "db.php";

    $sql = "SELECT i_board, title, create_at FROM t_board ORDER BY i_board";
    $conn = get_conn();
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
    <h1>리스트</h1>
    <a href="write.php"><button>글작성</button></a>
    <table>
        <tr>
            <th>번호</th>
            <th>제목</th>
            <th>작성일시</th>
        </tr>
        <?php
            while($row = mysqli_fetch_assoc($result))
            {
                $i_board = $row['i_board'];
                $title = $row['title'];
                $create_at = $row['create_at'];
                print "<tr>";
                print "<th>${i_board}</th>";
                print "<th><a href='detail.php?i_board=$i_board'>${title}</a></th>";
                print "<th>${create_at}</th>";
                print "</tr>";
            }
        ?>
    </table>
</body>
</html>