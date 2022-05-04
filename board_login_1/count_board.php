<?php
    include_once "db/db.php";
    $connection = get_conn();
    // DB와 커넥션 하여 connection 객체 얻어오기

    $YY = date('Y');
    $MM = date('m');
    $DD = date('d');

    $dat = $YY."-".$MM."-".$DD;
    //오늘 날짜 정보를 DB에서 조회한다
    $sql = "SELECT * FROM count_db WHERE redate = '$dat'";
    $result = mysqli_query($connection, $sql);
    $list = mysqli_num_rows($result);

    if(!$list){// 아무도 방문을 하지않아 정보가 없는 경우
        $count = 0;
    }
    else{//누군가가 방문을 하여 date정보가 존재할 경우
        $row = mysqli_fetch_assoc($result);
        $count = $row['count']; //현재 날짜의 count값을 가져온다
    }
    
    if($count === 0){
        $count++;
        // 오늘 날짜로 새로운 count값을 변경시킨다
        $sql = "INSERT INTO count_db VALUES ($count, '$dat')";
    }
    else{
        $count++;
        // 오늘 날짜의 기존 count값을 변경시킨다
        $sql = "UPDATE count_db SET count = $count WHERE redate = '$dat'";
    }

    mysqli_query($connection, $sql);

    // total 조회수 - 모든 count값을 sum()적용
    $totalQurey = "SELECT SUM(count) as cnt FROM count_db";
    $totalCount = mysqli_fetch_assoc(mysqli_query($connection, $totalQurey))['cnt'];
    mysqli_close($connection);

    echo "<br><center><h2> 방문자 수 통계입니다</h2><hr>";
    echo "[ Today : <font color = red>";
    echo $count;
    echo "</font>] <br>";

    echo "[ Total : <font color = blue>";
    echo $totalCount;
    echo "</font>] <br>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>방문자수 통계</title>
</head>
<body>
    
</body>
</html>