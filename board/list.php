<?php
    include_once "db.php";

    $conn = get_conn();
    $sql = "SELECT i_board, title, create_at FROM t_board ORDER BY i_board DESC";
    $result = mysqli_query($conn, $sql);// 쿼리문 실행
            // (셀렉트 문은 데이터 베이스 자료가 넘어온다)
    mysqli_close($conn);//닫는거 잊으면 안됨
    // 원하는 결과물을 다 가져왔기 때문에 위에서 닫아도 된다

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>리스트</title>
</head>
<body>
    <h1>리스트</h1>
    <a href="write.php"><button>글쓰기</button></a>
    <table>
        <tr>
            <th>번호</th>
            <th>제목</th>
            <th>작성일지</th>
        </tr>
        <?php
            while($row = mysqli_fetch_assoc($result))
            {// mysqli_fetch_assoc를 반복 시키기 위해 while문을 사용
             // 실행 할때마나 데이터 베이스의 첫번째 줄부터 순서대로 실행
             // $row에 배열로 들어가고 컬럼명(i_board등)을 키값으로 잡는다   
                $i_board = $row['i_board'];
                $title = $row['title'];
                $create_at = $row['create_at'];
                print "<tr>";
                print "<td>${i_board}</td>";
                print "<td><a href='detail.php?i_board=${i_board}'>${title}</a></td>";
                print "<td>${create_at}</td>";
                print "</tr>";
            }
            // 쿼리스트링 :  물음표 뒤에 = 로 연결된 key value pair 부분)을 url 뒤에 덧붙여서 추가적인 정보를 서버 측에 전달하는 것이다. 클라이언트가 어떤 특정 리소스에 접근하고 싶어하는지 정보를 담는다.
        ?>
    </table>
</body>
</html>