<?php
    include_once "db.php";

    $num = $_GET['num'];
    $sql = "SELECT title, ctnt, n_name FROM board WHERE num=$num";
    $conn = get_conn();
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    if($row = mysqli_fetch_assoc($result))
    {
        $title = $row['title'];
        $ctnt = $row['ctnt'];
        $n_name = $row['n_name'];
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
<h1>글작성</h1>
    <a href="detail.php?num=<?=$num?>"><button>게시글</button></a>
    <form action="mod_proc.php" method="post">
        <input type="hidden" name="num" value="<?=$num?>">
        <div><input type="text" name="title" placeholder="제목" value="<?=$title?>"></div>
        <div><textarea name="ctnt" placeholder="내용"><?=$ctnt?></textarea></div>
        <div><input type="text" name="n_name" placeholder="작성자" value="<?=$n_name?>"></div>
        <div>
            <input type="submit" value="수정">
            <input type="reset" value="초기화">
        </div>
    </form>
</body>
</html>