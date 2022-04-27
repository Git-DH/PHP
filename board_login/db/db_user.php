<?php
 include_once "db.php";

 function ins_user(&$param) {
    $uid = $param["uid"];
    $upw = $param["upw"];
    $nm = $param["nm"];
    $gender = $param["gender"];

    $conn = get_conn();
    $sql = 
    "INSERT INTO t_user
    (uid, upw, nm, gender)
    VALUES
    ('$uid', '$upw', '$nm', '$gender')
    ";
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    return $result;
 }

 function sel_user(&$param)// 선언부: 형태가 안 바뀌는게 좋다
 {// 여러개 값을 담은 데이터를 보내 유연한 대처가 가능하도록 함
    $uid = $param["uid"];
   // upw를 같이 넣으면 잘못된 값이 id인지 pw인지 구분을 못해서 
   // uid로 먼저 id값 체크하기 위해
   
    $sql = 
    "SELECT i_user, uid, upw, nm, gender 
     FROM t_user
     WHERE uid = '$uid'
    ";
    $conn = get_conn();
    $result = mysqli_query($conn, $sql);// 결과값만 담고 있을 뿐 사용하기 좋은상태는 아님
    mysqli_close($conn);
    return mysqli_fetch_assoc($result);// 결과값을 사용할 수 있도록 하는 함수
    // 결과 값을 가지고 호출한 곳으로 돌아감
 }