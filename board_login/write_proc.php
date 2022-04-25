<?php
    include_once "db/db_board.php";
    
    session_start();
    $login_user = $_SESSION["login_user"];
    $i_user = $login_user["i_user"];

    $title = $_POST["title"];
    $ctnt = $_POST["ctnt"];
    print $title;
    print $ctnt;

    $param = [
        "title" => $title,
        "ctnt" => $ctnt,
        "i_user" => $i_user
    ];
    print_r($param);
    $result = ins_board($param);
    print "result : " . $result;
    header("Location: list.php");

    
   
    
