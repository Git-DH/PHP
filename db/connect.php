<?php
/*
    create database board1;
    use board1;
    create table t_board ( 
        i_board int unsigned primary key auto_increment, 
        title varchar(200) not null, 
        ctnt varchar(3000) not null, 
        create_at datetime default now()
    );
*/
    define("URL", "localhost");
    define("USERNAME", "root");
    define("PASSWORD", "506greendg@");
    define("DB_NAME", "board1");

    $conn = mysqli_connect(URL, USERNAME, PASSWORD, DB_NAME);
    // php와 db를 연결 하는 비행기같은 역할, 값이 틀리면 연결이 안됨

    $sql = "INSERT INTO t_board(title, ctnt)
    VALUES('test', 'content')";
    // 비행기에 태울 쿼리문
    mysqli_query($conn, $sql);
    // 작성한 쿼리문을 db로 보내고 db에서 작동을 마친 후 다시 결과를 받는 역할

    mysqli_close($conn);
    // 역할을 다한 비행기 부수기(계속 살아있음 유지데이터가 많아짐)

    // 1. (insert, update, delete) => 0,1(참, 거짓)
    // 2. select - 최대 1개 가져오는 것 => 0,1개(배열) -detail
    // 3. select - 여러개 0, 1, 2 => 배열(배열) -list
    // 2번은 where절에 pk가 들어가고 3번은 들어갈 일이 잘 없다.
?>