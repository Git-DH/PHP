<?php
    include_once "db/db_user.php";

    $uid = $_POST["uid"];
    $upw = $_POST["upw"];

    $param = [
        "uid" => $uid
    ];

    $result = sel_user($param);

    if(empty($result)) {
        echo "아이디가 존재하지 않습니다.";
        die();
    }

    if($upw === $result["upw"]) {
        session_start();
        $_SESSION["login_user"] = $result;
        print_r($_SESSION["login_user"]);//로그인 유저에 값이 적용 되었는지 확인용
        header("Location: write.php");
    }else {
        header("Location: login.php");
    }
?>