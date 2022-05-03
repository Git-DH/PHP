<?php
    define("URL", "localhost");
    define("USERNAME", "root");
    define("PASSWORD", "506greendg@");
    define("DB_NAME", "board_login");
    
    function get_conn() //적당한 중간 단계가 효율을 높인다
    {
        return mysqli_connect(URL, USERNAME, PASSWORD, DB_NAME);
    }
?>