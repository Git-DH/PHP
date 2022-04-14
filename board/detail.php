<?php
    include_once 'db.php';//반복해서 include하는게 아니면 once쓰는게 낫다

    $i_board = $_GET['i_board'];
    //$_GET: form 태그로 보낸 데이터를 받는 함수(대문자필수)
    $sql= " SELECT * FROM t_board WHERE i_board = $i_board";

    $conn = get_conn();
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    if($row = mysqli_fetch_assoc($result))
    // while 문과 다르게 if문은 한줄 씩만 출력했다
    // 특정한 출력 값을 보이기 위해 할당
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
    <title><?= $title ?></title>
</head>
<body>
    <a href="list.php"><button>리스트</button></a>
    <!-- 
        php의 처리식이 아닌 값을 출력할 때는 아래의 형태로 출력이 가능하다. 
        html의 영역이기 때문에 php형식을 나타내는 형태를 썼다
    -->
    <div>제목 : <?= $title ?></div>
    <div>작성일시 : <?= $create_at ?></div>
    <div>내용 : <?= $ctnt ?></div>
</body>
</html>