<?php
    include_once "db/db_board.php";
    
    session_start();
    $login_user = $_SESSION["login_user"];
    $i_user = $login_user["i_user"];

    $title = $_POST["title"];
    $ctnt = $_POST["ctnt"];
    print $title. "<br>";
    print $ctnt. "<br>";

    $param = [
        "i_user" => $i_user,
        "title" => $title,
        "ctnt" => $ctnt
    ];
    print_r($param); //배열의 값과 함수의 값을 출력해서 확인 하는것이 좋다

    $result = ins_board($param);
    print "result : ${result}";

    header("Location: list.php");

   
    
