<?php
    include_once 'db.php';//반복해서 include하는게 아니면 once쓰는게 낫다

    /*define("URL", "localhost");
    define("USERNAME", "root");
    define("PASSWORD", "506greendg@");
    define("DB_NAME", "board1");
    
    function get_conn() 
    {
        return mysqli_connect(URL, USERNAME, PASSWORD, DB_NAME);
    }*/
    // include를 안 쓰면 위의 자료를 연결 해줄 자료마다 다 복사해줘야하며
    // db.php를 수정 시 복사해준 자료마다 다 바꿔줘야하는 일이 생긴다

    $i_board = $_GET['i_board'];
    $sql= " SELECT * FROM t_board WHERE i_board = $i_board";
    // WHERE절에 pk값이 =과 같이 있으면 하나만 나온다

    $conn = get_conn();
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    if($row = mysqli_fetch_assoc($result))
    {
        $title = $row['title'];
        $ctnt = $row['ctnt'];
        $create_at = $row['create_at'];
        $mod_at =$row['mod_at'];
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
    <a href="del_proc.php?i_board=<?=$i_board?>"><button>삭제</button></a>
    <a href="mod.php?i_board=<?=$i_board?>"><button>수정</button></a>
    <!-- 어떤걸 삭제 하고 싶은지 추가 해줘야 한다 -->
    <div>제목 : <?= $title ?></div>
    <div>내용 : <?= $ctnt ?></div>
    <div>작성일시 : <?= $create_at ?></div>
    <div>수정일시 : <?= $mod_at ?></div>
    <!-- 출력 축약형 -->
</body>
</html>