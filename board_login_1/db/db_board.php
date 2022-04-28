<?php
    include_once "db.php";

    function ins_board(&$param) {
        $i_user = $param["i_user"];
        $title = $param["title"];
        $ctnt = $param["ctnt"];

        $conn = get_conn();
        $sql = 
        "INSERT INTO t_board
        (i_user, title, ctnt)
        VALUES
        ($i_user, '$title', '$ctnt')
        ";
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }

    function sel_board_list() {
        $sql = 
        "SELECT A.i_board, A.title, A.create_at, A.i_user, B.nm
         FROM t_board A
         INNER JOIN t_user B
         ON A.i_user = B.i_user
         ORDER BY A.i_board DESC
        ";
        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }
    
    function sel_board($param) {
        $i_board = $param["i_board"];

        $sql = 
        "SELECT A.i_board, A.title, A.create_at, A.i_user, B.nm, A.ctnt
         FROM t_board A
         INNER JOIN t_user B
         ON A.i_user = B.i_user
         WHERE i_board = '$i_board'
        ";
        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return mysqli_fetch_assoc($result);
    }