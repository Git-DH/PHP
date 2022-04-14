<?php
    function get_conn() {
        define("URL", "localhost");
        define("USERNAME", "root");
        define("PASSWORD", "506greendg@");
        define("DB_NAME", "board1");
        return mysqli_connect(URL, USERNAME, PASSWORD, DB_NAME);
        // php와 mysql(mariaDB)를 연결 해주는 코드
        // (주소, 아이디, 비번, 데이터베이스, 포트번호(포트가 다를시에만 사용))
    }
?>