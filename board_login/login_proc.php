<?php 
    include_once "db/db_user.php";
    //login.php 에서 넘어오는 값을 적절한 변수에 담는다.
    //변수의 값을 출력.
    $uid = $_POST["uid"];
    $upw = $_POST["upw"];

    echo "uid : ", $uid, "<br>";
    echo "upw : ", $upw, "<br>";

    $param = [
        "uid" => $uid
    ];

    $result = sel_user($param);
    if(empty($result)) {
        echo "해당하는 아이디 없음";
        die;
    }// if문을 지나간다면 존재하는 id값이기 때문에 지나간다

    echo "i_user : " , $result["i_user"], "<br>";
    echo "pw : " , $result["upw"], "<br>"; 
    // 위의 if문을 지나온다면 $result에 값이 있는 것이므로 확인용으로 섰다  

    if($upw === $result["upw"]) { //로그인 성공!!
        session_start();
        $_SESSION["login_user"] = $result;
        // 브라우저가 꺼지는 순간까지 존재한다
        // 데이터베이스에서 가져온 정보를 세션변수에 넣음
        print "result : $result <br>";
        print_r($_SESSION["login_user"]);
        header("Location: list.php");
    } else {
        header("Location: login.php");
    }
