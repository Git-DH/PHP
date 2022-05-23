<?php
    include_once "db.php";

    function ins_board(&$param) {
        $i_user = $param["i_user"];
        $title = $param["title"];
        $ctnt = $param["ctnt"];

        $sql = 
        "   INSERT INTO t_board
            (title, ctnt, i_user)
            VALUES
            ('$title', '$ctnt', $i_user)
        ";

        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }

    function sel_paging_count(&$param) { //게시판 밑에 페이징 숫자를 찍고 싶어서 사용
        $sql = "SELECT CEIL(COUNT(i_board) / {$param["row_count"]}) as cnt
                FROM t_board";

        if($param["search_txt"] !== "") {
            $sql .= " WHERE title LIKE '%{$param["search_txt"]}%' ";
        }

        // count함수는 그룹함수라서 결과 한줄만 보여준다.
        // GROUP bY와 같이 쓰면 여러 값을 볼 수 있다.
        $conn = get_conn(); 
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        $row = mysqli_fetch_assoc($result);
        // 레코드의 값을 알아서 수동으로 선택해줌
        return $row["cnt"];
    }

    function sel_board_list(&$param) {
        $sql = "SELECT A.i_board, A.title, A.create_at
                     , B.nm
                  FROM t_board A
                 INNER JOIN t_user B
                    ON A.i_user = B.i_user";
        
        if($param["search_txt"] !== "") {
            $sql .= " WHERE title LIKE '%{$param["search_txt"]}%' ";
        }
        $sql .= " ORDER BY A.i_board DESC 
                  LIMIT {$param["s_idx"]}, {$param["row_count"]} ";
        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }

    function sel_board(&$param) {
        $i_board = $param["i_board"];
        $sql = "SELECT A.title, A.ctnt, A.create_at
                     , B.i_user, B.nm
                  FROM t_board A
                 INNER JOIN t_user B
                    ON A.i_user = B.i_user
                 WHERE A.i_board = $i_board";
        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);        
        return mysqli_fetch_assoc($result);
    }

    function upd_board(&$param) {
        $i_board = $param["i_board"];
        $title = $param["title"];
        $ctnt = $param["ctnt"];
        $i_user = $param["i_user"];

        $sql = "UPDATE t_board
                   SET title = '$title'
                     , ctnt = '$ctnt'
                     , updated_at = now()
                 WHERE i_board = $i_board
                   AND i_user = $i_user";
         $conn = get_conn();
         $result = mysqli_query($conn, $sql);
         mysqli_close($conn);
         return $result;
    }

    function del_board(&$param) {
        $i_board = $param["i_board"];
        $i_user = $param["i_user"];

        $sql = "DELETE FROM t_board 
                 WHERE i_board = $i_board 
                   AND i_user = $i_user";
        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }