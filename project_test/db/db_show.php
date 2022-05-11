<?php
    include_once "db.php";

    function sel_show(&$param){
        $g_num = $param["g_num"];

        $sql = 
            "SELECT A.g_num 
             FROM show_t A
             INNER JOIN galley_t B
             ON A.g_num = B.g_num
             WHERE A.g_num = $g_num
            ";
        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return mysqli_fetch_assoc($result);
    }
    // 전시 이미지는 업로드한 폴더에서 불러온다
?>