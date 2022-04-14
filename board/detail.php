<?php
    include_once 'db.php';//반복해서 include하는게 아니면 once쓰는게 낫다

    $i_board = $_GET['i_board'];
    $sql= " SELECT * FROM t_board WHERE i_board = $i_board";

    $conn = get_conn();
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    if($row = mysqli_fetch_assoc($result))
    {
        $title = $row['title'];
        $ctnt = $row['ctnt'];
        $create_at = $row['create_at'];
    }
    // list 파일과 detail파일이 차이점을 알아야한다
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$title</title>
</head>
<body>
    <a href="list.php"><button>리스트</button></a>
    <div>제목 : <?= $title ?></div>
    <div>작성일시 : <?= $create_at ?></div>
    <div>내용 : <?= $ctnt ?></div>
</body>
</html>