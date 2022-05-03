<?php
    include_once "db/db_user.php";

    $uid = $_POST["uid"];
    $upw = $_POST["upw"];
    $confitm_upw = $_POST["confirm_upw"];
    $nm = $_POST["nm"];
    $gender = $_POST["gender"];

    $param = [
        "uid" => $uid,
        "upw" => $upw,
        "nm" => $nm,
        "gender" => $gender,
    ];

    $result = ins_user($param);

    echo "uid : $uid <br>";
    echo "upw : $upw <br>";
    echo "nm : $nm <br>";
    echo "gender : $gender <br>";
    echo "result : $result <br>";
    header("Location: login.php");