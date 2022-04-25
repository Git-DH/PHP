<?php
    include_once "db/db_user.php";

    $uid = $_POST['uid'];
    $upw = $_POST['upw'];
    $confirm_upw = $_POST['confirm_upw'];
    $nm = $_POST['nm'];
    $gender = $_POST['gender'];

    $param = [
        'uid' => $uid,
        'upw' => $upw,
        'nm' => $nm,
        'gender' => $gender
    ];
    // 함수 사용 2가지
    // -php내부의 제공 함수 -본인이 만든 함수

    $result = ins_user($param);
    // 프로그래밍에서 =은 오른쪽의 값을 복사하여 왼쪽에 준다는 것
    // 함수를 호출하면 결국엔 return값이 된다 
    // =이 있으면 return값이고 없으면 return 키워드는 선택사항이고 return만 적고 끝이다

    echo "result : ", $result, "<br>";
    echo "uid : ", $uid, "<br>";
    echo "upw : ", $upw, "<br>";
    echo "confirm_upw : ", $confirm_upw, "<br>";
    echo "nm : ", $nm, "<br>";
    echo "gender : ", $gender, "<br>";
    header("Location: login.php");