<?php
    include_once "db.php";

    $num = $_GET['num'];

    $sql = "SELECT title, ctnt FROM db_t WHERE num=$num";
    $conn = get_conn();
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    if($row = mysqli_fetch_assoc($result))
    {
        $title = $row['title'];
        $ctnt = $row['ctnt'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>글쓰기</title>
</head>
<body>
    <h1>글수정</h1>
    <a href="detail.php?num=<?=$num?>"><button>글로 이동</button></a>
    <form action="mod_proc.php" method="post">
        <input type="hidden" name="num" value="<?=$num?>">
        <div><input type="text" name="title" placeholder="제목" value="<?=$num?>"></div>
        <div><textarea name="ctnt" placeholder="내용"><?=$ctnt?></textarea></div>

        <input type="submit" value="글수정">
        <input type="reset" value="초기화">
    </form>
</body>
</html>