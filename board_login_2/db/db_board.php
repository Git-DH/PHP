<?php
    include_once "db.php";

    function ins_board($param) {
        $title = $param["title"];
        $ctnt = $param["ctnt"];
        $i_user = $param["i_user"];

        $conn = get_conn();
        $sql = 
        "INSERT INTO t_board
        (title, ctnt, i_user)
        VALUES
        ('$title', '$ctnt', $i_user)
        ";
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }

    function sel_board_list()
    {
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

    function sel_paging_count($param) {//한 페이지에 몇개씩 표시할지 정하는 함수
        $row_count = $param["row_count"];
        $sql = 
        "SELECT CEIL(COUNT(i_board) / $row_count) as cnt
         FROM t_board
        ";
        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        $row = mysqli_fetch_assoc($result);
        return $row["cnt"];
    }

    function sel_board($param) {
        $i_board = $param["i_board"];

        $sql = 
        "SELECT A.i_board, A.title, A.create_at, A.i_user, B.nm, A.ctnt
         FROM t_board A
         INNER JOIN t_user B
         ON A.i_user = B.i_user
         WHERE A.i_board = '$i_board'
        ";
        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return mysqli_fetch_assoc($result);
    }

    function udp_board(&$param) {
        $i_board = $param["i_board"];
        $title = $param["title"];
        $ctnt = $param["ctnt"];

        $sql = 
        "UPDATE t_board
         SET title = '$title', ctnt = '$ctnt'
         WHERE i_board = $i_board";
        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }

    function del_board($param) {
        $i_board = $param["i_board"];
        $sql = 
        "DELETE FROM t_board
         WHERE i_board = $i_board
        ";
        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }