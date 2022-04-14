<?php
    include_once "db.php";//파일 불러오는 코드

    $title = $_POST["title"];
    $ctnt = $_POST["ctnt"];

    print "titled : $title <br>";
    print "ctnt : $ctnt <br>";

    $conn = get_conn();
    $sql =
    "
        INSERT INTO t_board
        (title, ctnt)
        VALUES
        ('${title}', '${ctnt}')
    ";// 입력된 value값이 들어간다
    $result = mysqli_query($conn, $sql);// 영향을 미친 행의 수 값이 들어감
    // 셀렉트 문 외에 인서트 문 등은 정수로 들어온다
    mysqli_close($conn); //연결 닫는거(중요)!!!
    header( 'Location: list.php' );//리디렉션
    // 1차주소/ 2차주소/ 3차주소 :폴더 이동시에는 앞에 주소값도 바꿔 줘야함
    // 앞에 / 붙이는 순간 주소 다 적어 줘야 한다
    die();
    // php중간에 넣으면 그 뒤에 코드값이 실행이 안되게 할때 사용
?>