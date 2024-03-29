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

    function sel_paging_count(&$param) {
        $row_count = $param["row_count"];
        $sql = 
        "SELECT CEIL(COUNT(i_board) / $row_count) as cnt
         FROM t_board"; 
        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        $row = mysqli_fetch_assoc($result);
        return $row["cnt"];
    }

    function sel_board_list($param) {
        $start_idx = $param["start_idx"];
        $row_count = $param["row_count"];
        $sql = 
        "SELECT A.i_board, A.title, A.created_at, A.i_user, B.nm
         FROM t_board A
         INNER JOIN t_user B
         ON A.i_user = B.i_user
         ORDER BY A.i_board DESC
         LIMIT $start_idx, $row_count
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
    
    function udp_board(&$param) {
        $i_board = $param["i_board"];
        $title = $param["title"];
        $ctnt = $param["ctnt"];
        $i_user = $param["i_user"];

        $sql = 
        "UPDATE t_board
         SET title = '$title', ctnt = '$ctnt' , update_at = now()
         WHERE i_board = $i_board AND i_user = $i_user
        ";
        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }

    function del_board(&$param) {
        $i_board = $param["i_board"];
        $i_user = $param["i_user"];

        $sql = 
        "DELETE FROM t_board
         WHERE i_board = '$i_board'
         AND i_user = '$i_user'
        ";
        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }

    function search_board(&$param) {
        $conn = get_conn();
        $search_select = $param['search_select'];
        $search_input_txt = $param['search_input_txt'];
        $textArray = explode(" ",$search_input_txt);
        $where = "B.nm";
        $qurey = "SELECT A.i_board, A.title, A.create_at, B.nm 
        FROM t_board A
        INNER JOIN t_user B
        ON A.i_user = B.i_user
        WHERE ";

        switch($search_select) {
            case "search_writer":
                $where = "B.nm";
                break;
            case "search_title":
                $where = "A.title";
                break;
            case "search_ctnt":
                $where = "A.ctnt";
                break;
            default:
        }

        for ($i=0; $i<count($textArray); $i++) {
            $qurey = $qurey. " $where LIKE '%$textArray[$i]%' ";
            if($i !== count($textArray)-1){
                $qurey = $qurey. "OR";
            }
        }
        $result = mysqli_query($conn, $qurey);
        mysqli_close($conn);
        return $result;
    }