<?php
    include_once "db/db_user.php";

    $uid = $_POST["uid"];
    $upw = $_POST["upw"];

    $param = [
        $uid =>"uid"
    ];

    $result = sel_user($param);
    if(empty($result)){
        echo "해당하는 아이디 없음";
        exit; // or die 도중에 멈추는 코드
    }

    echo "i_user : " , $result["i_user"], "<br>";
    echo "pw : " , $result["upw"], "<br>";

    if($upw === $result["upw"])
    {
        session_start();
        $_SESSION["login_user"] = $result;
        header("Location: list.php");
    }
    else
    {
        header("Location: login.php");
    }
