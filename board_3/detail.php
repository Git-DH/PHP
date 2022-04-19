<?php
    include_once "db.php";
    
    $num = $_GET['num'];
    $sql = "SELECT * FROM t_board WHERE num = $num";
    $conn = get_conn();
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);

    if($row = mysqli_fetch_assoc($result))
    {
        $title = $row['title'];
        $ctnt = $row['ctnt'];
        $create_at = $row['create_at'];
    }

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
    <a href="list.php"><button>리스트</button></a>
    <a href="mod.php?num=<?=$num?>"><button>수정</button></a>
    <a href="del_proc.php?num=<?=$num?>"><button>삭제</button></a>
    <div>제목 : <?=$title?></div>
    <div>내용 : <?=$ctnt?></div>
    <div>작성일자 : <?=$create_at?></div>
</body>
</html>